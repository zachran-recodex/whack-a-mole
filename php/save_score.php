<?php
// Mengimpor file konfigurasi database
require_once 'config.php';

// Mengambil data dari request AJAX
$data = json_decode(file_get_contents('php://input'), true);

// Validasi data
if (isset($data['name']) && isset($data['score']) && isset($data['level'])) {
    $name = $conn->real_escape_string($data['name']);
    $score = (int)$data['score'];
    $level = (int)$data['level'];
    
    // Menyimpan skor ke database
    $sql = "INSERT INTO scores (name, score, level, date_created) VALUES ('$name', $score, $level, NOW())";
    
    if ($conn->query($sql) === TRUE) {
        // Berhasil menyimpan data
        $response = [
            'status' => 'success',
            'message' => 'Skor berhasil disimpan'
        ];
    } else {
        // Gagal menyimpan data
        $response = [
            'status' => 'error',
            'message' => 'Gagal menyimpan skor: ' . $conn->error
        ];
    }
} else {
    // Data tidak lengkap
    $response = [
        'status' => 'error',
        'message' => 'Data tidak lengkap'
    ];
}

// Mengirim response dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);

// Menutup koneksi database
$conn->close();
?>