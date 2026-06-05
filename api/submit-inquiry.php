<?php
/**
 * submit-inquiry.php — API Endpoint for Contact Form
 * 
 * Receives JSON POST data from the inquiry form,
 * validates and sanitizes input, then stores it in SQLite.
 * Returns JSON response with success/error status.
 */

require_once __DIR__ . '/../config/env.php';

header('Content-Type: application/json');

// 1. Dynamic CORS Protection
$appEnv = getenv('APP_ENV') ?: $_ENV['APP_ENV'] ?? 'development';
$allowedOrigin = getenv('ALLOWED_ORIGIN') ?: $_ENV['ALLOWED_ORIGIN'] ?? '';

if ($appEnv === 'production' && !empty($allowedOrigin)) {
    header('Access-Control-Allow-Origin: ' . $allowedOrigin);
} else {
    // In development, allow all
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
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

// 2. Session-based Rate Limiting
session_start();
$cooldownSeconds = 60; // Wait 60 seconds between submissions
$now = time();

if (isset($_SESSION['last_submission_time'])) {
    $timeSinceLastSubmission = $now - $_SESSION['last_submission_time'];
    if ($timeSinceLastSubmission < $cooldownSeconds) {
        http_response_code(429); // Too Many Requests
        echo json_encode([
            'success' => false, 
            'error' => 'You are submitting too fast. Please wait a moment.'
        ]);
        exit;
    }
}

// Database connection from config
require_once __DIR__ . '/../config/db.php';

// Parse JSON body — guard against malformed input
$input = json_decode(file_get_contents('php://input'), true);

if (!is_array($input)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid request body.']);
    exit;
}

$name = trim($input['name'] ?? '');
$email = trim($input['email'] ?? '');
$whatsapp = trim($input['whatsapp'] ?? '');
$message = trim($input['message'] ?? '');
$honeypot = trim($input['website_url'] ?? '');

// 3. Honeypot Check (Anti-Bot)
// If the hidden field is filled, it's likely a bot. Silently drop it.
if (!empty($honeypot)) {
    echo json_encode(['success' => true, 'message' => 'Inquiry submitted successfully.']);
    exit;
}

// Server-side validation
if (empty($name) || empty($email) || empty($whatsapp) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'All fields are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid email address.']);
    exit;
}

// Sanitize to prevent XSS if data is ever rendered in HTML
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$whatsapp = htmlspecialchars($whatsapp, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Insert via Supabase REST API (bypasses shared hosting outbound firewall blocks on port 5432)
$supabaseUrl = getenv('SUPABASE_URL') ?: $_ENV['SUPABASE_URL'] ?? '';
$supabaseKey = getenv('SUPABASE_KEY') ?: $_ENV['SUPABASE_KEY'] ?? '';

if (empty($supabaseUrl) || empty($supabaseKey)) {
    error_log('Supabase credentials are not configured.');
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Server configuration error.']);
    exit;
}

$restEndpoint = rtrim($supabaseUrl, '/') . '/rest/v1/inquiries';
$payload = json_encode([
    'name' => $name,
    'email' => $email,
    'whatsapp' => $whatsapp,
    'message' => $message
]);

$ch = curl_init($restEndpoint);
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'apikey: ' . $supabaseKey,
        'Authorization: Bearer ' . $supabaseKey,
        'Content-Type: application/json',
        'Prefer: return=minimal'
    ],
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYPEER => ($appEnv === 'production')
]);

$curlResponse = curl_exec($ch);
$httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($curlError || $httpStatus >= 300) {
    error_log('Supabase REST API insert failed: HTTP ' . $httpStatus . ' | ' . $curlResponse . ' | cURL: ' . $curlError);
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Server error. Please try again later.']);
    exit;
}

// Record successful submission time for rate limiting
$_SESSION['last_submission_time'] = time();

echo json_encode(['success' => true, 'message' => 'Inquiry submitted successfully.']);
