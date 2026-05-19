<?php
/**
 * submit-inquiry.php — API Endpoint for Contact Form
 * 
 * Receives JSON POST data from the inquiry form,
 * validates and sanitizes input, then stores it in SQLite.
 * Returns JSON response with success/error status.
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
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

try {
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO inquiries (name, email, whatsapp, message) VALUES (:name, :email, :whatsapp, :message)");
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':whatsapp' => $whatsapp,
        ':message' => $message
    ]);
    
    echo json_encode(['success' => true, 'message' => 'Inquiry submitted successfully.']);
} catch (Exception $e) {
    error_log('Inquiry submission failed: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Server error. Please try again later.']);
}
