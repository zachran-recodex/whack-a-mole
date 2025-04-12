<?php
header('Content-Type: application/json');

// Connection parameters
$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '';
$db_name = 'whack_a_mole';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit;
}

// Set character set
$conn->set_charset("utf8mb4");
?>