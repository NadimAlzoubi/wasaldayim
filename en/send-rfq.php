<?php

// ===============================
// Basic request validation
// ===============================
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['submit_rfq'])) {
    http_response_code(403);
    exit('Forbidden');
}

// ===============================
// Helper function
// ===============================
function clean($value): string
{
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

// ===============================
// Required fields
// ===============================
$requiredFields = [
    'name',
    'email',
    'phone',
    'service',
    'shipment_type',
    'origin',
    'destination'
];

// ===============================
// Validate required fields
// ===============================
foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        http_response_code(400);
        exit('Missing required fields');
    }
}

// ===============================
// Sanitize inputs
// ===============================
$name        = clean($_POST['name']);
$email       = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$phone       = clean($_POST['phone']);
$service     = clean($_POST['service']);
$shipment    = clean($_POST['shipment_type']);
$origin      = clean($_POST['origin']);
$destination = clean($_POST['destination']);
$notes       = isset($_POST['notes']) ? clean($_POST['notes']) : '—';

// ===============================
// Validate email
// ===============================
if (!$email) {
    http_response_code(400);
    exit('Invalid email address');
}

// ===============================
// Build message
// ===============================
$message = <<<MAIL
NEW RFQ REQUEST

Name: $name
Email: $email
Phone: $phone

Service: $service
Shipment Type: $shipment
Origin: $origin
Destination: $destination

Notes:
$notes
MAIL;

// ===============================
// Email headers (anti-injection)
// ===============================
$headers = [
    'From' => 'RFQ Form <no-reply@wasaldayim.com>',
    'Reply-To' => $email,
    'Content-Type' => 'text/plain; charset=UTF-8'
];

// Convert headers array to string
$headersString = '';
foreach ($headers as $key => $value) {
    $headersString .= $key . ': ' . str_replace(["\r", "\n"], '', $value) . "\r\n";
}

// ===============================
// Send mail
// ===============================
$sent = mail(
    'nadim.alzoubi.99@gmail.com',
    'New RFQ Submission',
    $message,
    $headersString
);

// ===============================
// Handle result
// ===============================
if (!$sent) {
    http_response_code(500);
    exit('Mail sending failed');
}

// ===============================
// Redirect on success
// ===============================
header('Location: thank-you.html');
exit;
