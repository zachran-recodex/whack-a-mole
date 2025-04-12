<?php
header('Content-Type: application/json');

$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '';
$db_name = 'whack_a_mole';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]);
} else {
    echo json_encode(['success' => true, 'message' => 'Database connection successful']);
}

$conn->close();
?>