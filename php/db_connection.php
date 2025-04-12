<?php

// Connection parameters
$db_host = 'localhost';
$db_user = 'root';     // Update with your MySQL username
$db_pass = '';         // Update with your MySQL password
$db_name = 'whack_a_mole';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set
$conn->set_charset("utf8mb4");