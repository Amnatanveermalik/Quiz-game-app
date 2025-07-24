<?php
    include("database/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRAINLOOM - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .icon {
            width: 80px; 
            height: auto; 
            margin-left: 10px; 
        }

        body {
            font-family: cursive, Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(45deg, #f1c5e4, #884572, #e4258e);
            color: white;
            text-align: center;
            padding: 48px 16px;
        }

        .header-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        header h1 {
            font-size: 56px;
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
        }

        header p {
            font-size: 20px;
            margin: 16px 0;
            font-weight: 600;
        }

        .content {
            padding: 32px 64px;
            background-color: white;
            text-align: center;
        }

        .content p {
            font-size: 19px;
            max-width: 800px;
            margin: 16px auto;
            line-height: 1.8;
            color: #555;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }

        .button {
            padding: 10px 20px;
            font-size: 18px;
            color: white;
            background-color: #c4478c;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #542839;
        }

        footer {
            background: linear-gradient(45deg, #f1c5e4, #884572, #e4258e);
            color: white;
            padding: 16px 0;
            text-align: center;
            margin-top: 20px;
        }

        footer p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>
                BRAINLOOM
                <img src="image.jpg" class="icon" alt="Brain Icon">
            </h1>
        </div>
        <p>Dive into the challenge and prove your knowledge with our quiz game!</p>
    </header>

    <section class="content">
        <p>Engage in exciting learning experiences with the BRAINLOOM Quiz, designed for students and teachers. 
        <br> Ready to kick things off?</p>
        <div class="buttons">
            <a href="html/student_login.html" class="button">Student</a>
        </div>
        <div class="buttons">
            <a href="html/teacher_login.html" class="button">Teacher</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 BRAINLOOM - All Rights Reserved</p>
    </footer>
</body>
</html>
