<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, "", 3306);
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }

    $db_name = "quiz_db";
    $sql = "CREATE DATABASE IF NOT EXISTS $db_name";
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        die("Error creating database: " . $conn->error);
    }

    $conn->select_db($db_name);
    echo "";
?>