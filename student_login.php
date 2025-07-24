<?php
session_start();
include("connection.php");
$user = $_POST['username'];
$roll_number = $_POST['roll_number'];

// Create table with nullable score column
$createTableSQL = "
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    roll_number VARCHAR(50) NOT NULL,
    web_score INT DEFAULT NULL,
    physics_score INT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$insertSQL = "INSERT INTO students (username, roll_number) VALUES (?, ?)";

// Execute table creation
if ($conn->query($createTableSQL) === TRUE) {
    // Prepare and bind parameters for inserting data
    $stmt = $conn->prepare($insertSQL);
    $stmt->bind_param("ss", $user, $roll_number);

    if ($stmt->execute()) {
        $_SESSION['username'] = $user;
        echo "Student record saved successfully!";
        echo '
        <script>
            window.location.href = "../html/web_quiz.html";
        </script>
        ';
    } else {
        echo "Error inserting record: " . $stmt->error;
        echo '
        <script>
            alert("Error inserting record");
            window.location.href = "../html/student_login.html";
        </script>
        ';
    }
    $stmt->close();
} else {
    echo "Error creating table: " . $conn->error;
    echo '
    <script>
        alert("Error creating table");
        window.location.href = "../html/student_login.html";
    </script>
    ';
}

$conn->close();
?>
