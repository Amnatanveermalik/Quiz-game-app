<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 300px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 8px 0 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #e4258e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #884572;
        }
        .message {
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Delete Student Record</h2>
        <form method="POST" action="../database/delete_record.php">
            <label for="rollNumber">Enter Roll Number:</label>
            <input type="text" id="rollNumber" name="rollNumber" required>
            <input type="submit" value="Delete Record">
        </form>

    </div>

</body>
</html>
