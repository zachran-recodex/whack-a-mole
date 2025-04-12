-- Membuat database jika belum ada
CREATE DATABASE IF NOT EXISTS whack_a_mole;

-- Menggunakan database whack_a_mole
USE whack_a_mole;

-- Membuat tabel scores untuk menyimpan skor pemain
CREATE TABLE IF NOT EXISTS scores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    score INT NOT NULL,
    level INT NOT NULL COMMENT '0: Easy (30s), 1: Medium (10s), 2: Hard (5s)',
    date_created DATETIME NOT NULL
);

-- Menambahkan indeks untuk mempercepat query
CREATE INDEX idx_level_score ON scores(level, score DESC);