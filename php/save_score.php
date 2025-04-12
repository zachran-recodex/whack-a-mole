<?php
header('Content-Type: application/json');

try {
    // Include database connection
    require_once 'db_connection.php';
    
    // Check if request is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get data from POST request
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
        
        // Log incoming data for debug purposes
        error_log("Received data: " . $input);
        
        // Validate data
        if (!$data) {
            echo json_encode(['success' => false, 'message' => 'Invalid JSON data received']);
            exit;
        }
        
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
            
            if (!$stmt) {
                echo json_encode(['success' => false, 'message' => 'Prepare statement failed: ' . $conn->error]);
                exit;
            }
            
            $stmt->bind_param("sii", $name, $score, $difficulty);
            
            if ($stmt->execute()) {
                echo json_encode(['success' => true, 'message' => 'Score saved successfully']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Error executing statement: ' . $stmt->error]);
            }
            
            $stmt->close();
        } else {
            echo json_encode(['success' => false, 'message' => 'Missing required data (name, score, or difficulty)']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request method. POST required.']);
    }
} catch (Exception $e) {
    error_log("Exception in save_score.php: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Server error: ' . $e->getMessage()]);
}

if (isset($conn)) {
    $conn->close();
}
?>