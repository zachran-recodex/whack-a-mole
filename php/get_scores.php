<?php

// Include database connection
require_once 'db_connection.php';

// Check if this is a GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get optional difficulty filter
    $difficulty = isset($_GET['difficulty']) ? (int)$_GET['difficulty'] : null;
    
    // Prepare query based on whether difficulty is specified
    if ($difficulty !== null) {
        $query = "SELECT player_name, score, difficulty, date_created FROM scores 
                 WHERE difficulty = ? 
                 ORDER BY score DESC LIMIT 8";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $difficulty);
    } else {
        $query = "SELECT player_name, score, difficulty, date_created FROM scores 
                 ORDER BY score DESC LIMIT 8";
        $stmt = $conn->prepare($query);
    }
    
    // Execute query
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Fetch results
    $scores = [];
    while ($row = $result->fetch_assoc()) {
        $scores[] = [
            'name' => $row['player_name'],
            'score' => $row['score'],
            'difficulty' => $row['difficulty'],
            'date' => $row['date_created']
        ];
    }
    
    // Return scores as JSON
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'scores' => $scores]);
    
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

$conn->close();