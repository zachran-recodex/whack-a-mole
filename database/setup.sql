-- Create database for the Whack-A-Mole game
CREATE DATABASE IF NOT EXISTS whack_a_mole;

-- Use the created database
USE whack_a_mole;

-- Create table for storing player scores
CREATE TABLE IF NOT EXISTS scores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player_name VARCHAR(50) NOT NULL,
    score INT NOT NULL,
    difficulty TINYINT NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);