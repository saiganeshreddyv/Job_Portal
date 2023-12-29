<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Languages</th>
                <th>Skills</th>
                <th>Experience</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "reg";
            $conn = new mysqli($servername, $username, $password, $db); 

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT * FROM jregistration";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['user_id']}</td>";
                echo "<td>{$row['First Name']}</td>";
                echo "<td>{$row['Last Name']}</td>";
                echo "<td>{$row['DOB']}</td>";
                echo "<td>{$row['Email']}</td>";
                echo "<td>{$row['Mobile Number']}</td>";
                echo "<td>{$row['Gender']}</td>";
                echo "<td>{$row['Languages']}</td>";
                echo "<td>{$row['Skills']}</td>";
                echo "<td>{$row['Experience']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
