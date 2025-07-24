<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $rollNumber = $_POST['rollNumber'];
    $gainedScore = $_POST['gainedScore'];

    $updateSQL = "UPDATE students SET web_score = ? WHERE roll_number = ?";
    $stmt = $conn->prepare($updateSQL);

    if ($stmt) {
        $stmt->bind_param("is", $gainedScore, $rollNumber);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo '<script>alert("Record updated successfully!"); window.location.href = "../html/web_quiz_results.php";</script>';
            } else {
                echo '<script>alert("No record found with the given roll number."); window.history.back();</script>';
            }
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
}
?>
