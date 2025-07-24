<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capture the roll number from the form
    $rollNumber = $_POST['rollNumber'];

    // Validate input
    if (empty($rollNumber)) {
        echo '<script>alert("Please enter a roll number."); window.history.back();</script>';
        exit;
    }

    // SQL to delete the record
    $deleteSQL = "DELETE FROM students WHERE roll_number = ?";
    $stmt = $conn->prepare($deleteSQL);

    if ($stmt) {
        // Bind parameters (rollNumber)
        $stmt->bind_param("s", $rollNumber);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo '<script>alert("Record deleted successfully!"); window.location.href = "../html/web_quiz_results.php";</script>';
            } else {
                echo '<script>alert("No record found with the given roll number."); window.history.back();</script>';
            }
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
}
?>
