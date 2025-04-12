<?php

// Include database connection
require_once 'db_connection.php';

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from POST request
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Validate data
    if (isset($data['name']) && isset($data['score']) && isset($data['difficulty'])) {
        $name = $conn->real_escape_string(trim($data['name']));
        $score = (int)$data['score'];
        $difficulty = (int)$data['difficulty'];
        
        // Validate name
        if (empty($name)) {
            echo json_encode(['success' => false, 'message' => 'Name cannot be empty']);
            exit;
        }
        
        // Insert score into database
        $query = "INSERT INTO scores (player_name, score, difficulty) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sii", $name, $score, $difficulty);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Score saved successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error saving score: ' . $stmt->error]);
        }
        
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Missing required data']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

$conn->close();