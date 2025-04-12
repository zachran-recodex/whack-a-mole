<?php
// Konfigurasi database
$host = 'localhost'; // Host database
$username = 'root'; // Username database
$password = ''; // Password database
$database = 'whack_a_mole'; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Set karakter encoding
$conn->set_charset("utf8");
?>