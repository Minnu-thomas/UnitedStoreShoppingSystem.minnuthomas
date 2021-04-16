<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

$url = 'http://localhost:3000/production/invoice/';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = [
    'name' => $name,
    'email' => $email,
];
$payload = json_encode(['user' => $data]);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

echo $result;
header('location:index.php');
// Close cURL resource
curl_close($ch);
