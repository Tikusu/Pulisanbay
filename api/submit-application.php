<?php
/**
 * submit-application.php — API Endpoint for Job Application Form
 *
 * Receives multipart/form-data POST data from the application form,
 * validates and sanitizes input, uploads the CV PDF to Supabase Storage,
 * then stores application data in the job_applications table on Supabase.
 * Returns JSON response with success/error status.
 */

require_once __DIR__ . '/../config/env.php';

header('Content-Type: application/json');

// Dynamic CORS Protection
$appEnv = getenv('APP_ENV') ?: $_ENV['APP_ENV'] ?? 'development';
$allowedOrigin = getenv('ALLOWED_ORIGIN') ?: $_ENV['ALLOWED_ORIGIN'] ?? '';

if ($appEnv === 'production' && !empty($allowedOrigin)) {
    header('Access-Control-Allow-Origin: ' . $allowedOrigin);
} else {
    header('Access-Control-Allow-Origin: *');
}

header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Handle CORS preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed.']);
    exit;
}

// Session-based Rate Limiting (60 seconds cooldown per session)
session_start();
$cooldownSeconds = 60;
$now = time();

if (isset($_SESSION['last_application_time'])) {
    $timeSinceLastSubmission = $now - $_SESSION['last_application_time'];
    if ($timeSinceLastSubmission < $cooldownSeconds) {
        http_response_code(429);
        echo json_encode([
            'success' => false,
            'error' => 'You are submitting too fast. Please wait a moment.'
        ]);
        exit;
    }
}

// Honeypot Check (Anti-Bot)
$honeypot = trim($_POST['website_url'] ?? '');
if (!empty($honeypot)) {
    // Silently accept but do nothing
    echo json_encode(['success' => true, 'message' => 'Application submitted successfully.']);
    exit;
}

// Sanitize & Validate Text Fields
$name            = trim($_POST['name'] ?? '');
$email           = trim($_POST['email'] ?? '');
$phone           = trim($_POST['phone'] ?? '');
$prevPosition    = trim($_POST['prev_position'] ?? '');
$division        = trim($_POST['division'] ?? '');
$expectedSalary  = trim($_POST['expected_salary'] ?? '');

if (empty($name) || empty($email) || empty($phone) || empty($prevPosition) || empty($division) || empty($expectedSalary)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'All fields are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid email address.']);
    exit;
}

if (!is_numeric($expectedSalary) || (float)$expectedSalary <= 0) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Expected salary must be a positive number.']);
    exit;
}

// Sanitize (anti-XSS)
$name           = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email          = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$phone          = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$prevPosition   = htmlspecialchars($prevPosition, ENT_QUOTES, 'UTF-8');
$division       = htmlspecialchars($division, ENT_QUOTES, 'UTF-8');
$expectedSalary = (float)$expectedSalary;

// Validate Uploaded CV File
if (!isset($_FILES['cv']) || $_FILES['cv']['error'] !== UPLOAD_ERR_OK) {
    $uploadError = $_FILES['cv']['error'] ?? UPLOAD_ERR_NO_FILE;
    if ($uploadError === UPLOAD_ERR_NO_FILE) {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'CV file is required.']);
    } else {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'File upload failed. Please try again.']);
    }
    exit;
}

$cvFile = $_FILES['cv'];

// Check file size (3MB = 3,145,728 bytes)
$maxSize = 3 * 1024 * 1024;
if ($cvFile['size'] > $maxSize) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'CV file exceeds the 3MB size limit.']);
    exit;
}

// Check file type (PDF only)
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimeType = finfo_file($finfo, $cvFile['tmp_name']);
finfo_close($finfo);

$originalExtension = strtolower(pathinfo($cvFile['name'], PATHINFO_EXTENSION));

if ($mimeType !== 'application/pdf' || $originalExtension !== 'pdf') {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Only PDF files are allowed.']);
    exit;
}

// Upload CV to Supabase Storage via REST API
$supabaseUrl    = getenv('SUPABASE_URL') ?: $_ENV['SUPABASE_URL'] ?? '';
$supabaseKey    = getenv('SUPABASE_KEY') ?: $_ENV['SUPABASE_KEY'] ?? '';
$storageBucket  = getenv('SUPABASE_STORAGE_BUCKET') ?: $_ENV['SUPABASE_STORAGE_BUCKET'] ?? '';

if (empty($supabaseUrl) || empty($supabaseKey) || empty($storageBucket)) {
    error_log('Supabase Storage credentials are not configured.');
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Server configuration error. Please contact support.']);
    exit;
}

// Generate a unique, safe filename
$uniqueFilename = 'cv_' . bin2hex(random_bytes(10)) . '.pdf';
$storageEndpoint = rtrim($supabaseUrl, '/') . '/storage/v1/object/' . $storageBucket . '/' . $uniqueFilename;

$fileContents = file_get_contents($cvFile['tmp_name']);
if ($fileContents === false) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Failed to read uploaded file.']);
    exit;
}

$ch = curl_init($storageEndpoint);
curl_setopt_array($ch, [
    CURLOPT_CUSTOMREQUEST  => 'POST',
    CURLOPT_POSTFIELDS     => $fileContents,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => [
        'Authorization: Bearer ' . $supabaseKey,
        'Content-Type: application/pdf',
        'x-upsert: false',
    ],
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_SSL_VERIFYPEER => ($appEnv === 'production'),
]);

$curlResponse = curl_exec($ch);
$httpStatus   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError    = curl_error($ch);
curl_close($ch);

if ($curlError || ($httpStatus !== 200 && $httpStatus !== 200)) {
    error_log('Supabase Storage upload failed: HTTP ' . $httpStatus . ' | ' . $curlResponse . ' | cURL: ' . $curlError);
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Failed to upload CV. Please try again.']);
    exit;
}

// Build the public/storage URL for the uploaded file
$cvStoragePath = rtrim($supabaseUrl, '/') . '/storage/v1/object/public/' . $storageBucket . '/' . $uniqueFilename;

// Insert Application into Supabase Database
require_once __DIR__ . '/../config/db.php';

try {
    $db = getDB();
    $stmt = $db->prepare("
        INSERT INTO job_applications (name, email, phone, previous_position, division, expected_salary, cv_path)
        VALUES (:name, :email, :phone, :previous_position, :division, :expected_salary, :cv_path)
    ");
    $stmt->execute([
        ':name'              => $name,
        ':email'             => $email,
        ':phone'             => $phone,
        ':previous_position' => $prevPosition,
        ':division'          => $division,
        ':expected_salary'   => $expectedSalary,
        ':cv_path'           => $cvStoragePath,
    ]);

    // Record successful submission for rate limiting
    $_SESSION['last_application_time'] = time();

    echo json_encode(['success' => true, 'message' => 'Application submitted successfully.']);
} catch (Exception $e) {
    error_log('Job application DB insert failed: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Server error. Please try again later.']);
}
