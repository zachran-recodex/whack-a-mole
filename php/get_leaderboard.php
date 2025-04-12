<?php
// Mengimpor file konfigurasi database
require_once 'config.php';

// Mengambil parameter level dari request
$level = isset($_GET['level']) ? (int)$_GET['level'] : 0;

// Query untuk mengambil data leaderboard berdasarkan level
$sql = "SELECT name, score, date_created FROM scores WHERE level = $level ORDER BY score DESC LIMIT 10";
$result = $conn->query($sql);

$leaderboard = [];

if ($result->num_rows > 0) {
    // Mengambil data dari hasil query
    while ($row = $result->fetch_assoc()) {
        $leaderboard[] = [
            'name' => $row['name'],
            'score' => $row['score'],
            'date' => $row['date_created']
        ];
    }
}

// Mengirim response dalam format JSON
header('Content-Type: application/json');
echo json_encode($leaderboard);

// Menutup koneksi database
$conn->close();
?>