<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Web Results - BRAINLOOM</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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

        .header-text {
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

        .icon {
            width: 80px;
            height: auto;
            margin-left: 10px;
        }

        header p {
            font-size: 20px;
            margin: 16px 0;
            font-weight: 600;
        }

        .result {
            padding: 32px 64px;
            background-color: #fff;
            margin: 40px auto;
            max-width: 800px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .result h2 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .result table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .result table th,
        .result table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
            font-size: 18px;
        }

        .result table th {
            background-color: #884572;
            color: white;
        }

        .result table tr:hover {
            background-color: #f1c5e4;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .buttons button {
            background-color: #884572;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .buttons button:hover {
            background-color: #e4258e;
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
        <div class="header-text">
            <h1>
                BRAINLOOM
            </h1>
        </div>
        <p>Teacher Portal - Student Web Engineering Results</p>
    </header>

    <section class="result">
        <h2>Web Engineering Results</h2>
        <table>
            <thead>
                <tr>
                    <th>Roll Number</th>
                    <th>Name</th>
                    <th>Gained Score</th>
                    <th>Total Score</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include your database connection file
                include('../database/connection.php');

                // Query to fetch roll_number, username, and web_score
                $query = "SELECT roll_number, username, web_score FROM students";
                $result = $conn->query($query);

                // Check if we have results
                if ($result->num_rows > 0) {
                    // Loop through each row and display the data
                    while ($row = $result->fetch_assoc()) {
                        $web_score = ($row['web_score'] === NULL) ? "Not Attempted" : $row['web_score'];
                        echo "<tr>
                                <td>" . $row['roll_number'] . "</td>
                                <td>" . $row['username'] . "</td>
                                <td>" . $web_score . "</td>
                                <td>5</td> 
                              </tr>";
                    }
                } else {
                    // If no data is found, display a message
                    echo "<tr><td colspan='4'>No results found</td></tr>";
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>

        <div class="buttons">
            <button onclick="window.location.href='add.php'">Add</button>
            <button onclick="window.location.href='update.php'">Update</button>
            <button onclick="window.location.href='delete.php'">Delete</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 BRAINLOOM - All Rights Reserved</p>
    </footer>
</body>
</html>
