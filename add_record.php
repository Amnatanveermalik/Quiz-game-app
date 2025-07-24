<?php
session_start();
include("connection.php");

$roll_number = $_POST['roll_number'];
$username = $_POST['username'];
$gained_score = $_POST['score'];
$total_score = $_POST['totalScore'];

$insertSQL = "INSERT INTO students (username, roll_number, web_score) VALUES (?, ?, ?)";
$stmt = $conn->prepare($insertSQL);

if ($stmt) {
    $stmt->bind_param("ssi", $username, $roll_number, $gained_score);

    if ($stmt->execute()) {
        echo "Student record saved successfully!";
        echo '<script>window.location.href = "../html/web_quiz_results.php";</script>';
    } else {
        echo "Error inserting record: " . $stmt->error;
        echo '<script>alert("Error inserting record"); window.location.href = "../html/web_quiz_results.php";</script>';
    }
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

$conn->close();
?>