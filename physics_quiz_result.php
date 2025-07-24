<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student physics Results - BRAINLOOM</title>
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
        <p>Teacher Portal - Student Physics Results</p>
    </header>

    <section class="result">
        <h2>Physics Results</h2>
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
                $query = "SELECT roll_number, username, physics_score FROM students";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $physics_score = ($row['physics_score'] === NULL) ? "Not Attempted" : $row['physics_score'];
                        echo "<tr>
                                <td>" . $row['roll_number'] . "</td>
                                <td>" . $row['username'] . "</td>
                                <td>" . $physics_score . "</td>
                                <td>5</td> 
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No results found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </section>

    <footer>
        <p>&copy; 2024 BRAINLOOM - All Rights Reserved</p>
    </footer>
</body>
</html>
