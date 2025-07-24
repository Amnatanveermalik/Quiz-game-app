<?php
session_start();
include("connection.php");

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $score = $_POST['score'];

    $updateSQL = "UPDATE students SET web_score = ? WHERE username = ?";
    $stmt = $conn->prepare($updateSQL);
    $stmt->bind_param("is", $score, $username);

    if ($stmt->execute()) {
        echo "Score updated successfully!";
    } else {
        echo "Error updating score: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "User not logged in.";
}
$conn->close();
?>
