<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Page</title>
    <style>
        .job-container {
            width: 66%;
            float: left;
            background-color: white;
            padding: 20px;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 20px;
        }

        .job-title {
            font-size: 20px;
        }

        .job-company {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .job-company i {
            color: orange;
            margin-left: 10px;
        }

        .job-skill {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .job-apply-button {
            background: blue;
            padding: 10px;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            float: right;
        }
    </style>
</head>
<body>

<?php
$host = "localhost";  
$username = "root";
$password = "";
$database = "reg";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM jobs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="job-container">';
        echo '<h2>' . $row['jobTitle'] . '</h2>';
        echo '<p><strong>Company:</strong> ' . $row['companyName'] . '</p>';
        echo '<p><strong>Location:</strong> ' . $row['jobLocation'] . '</p>';
        echo '<p><strong>Description:</strong> ' . $row['jobDescription'] . '</p>';
        echo '<p><strong>Skills Required:</strong> ' . $row['skillsRequired'] . '</p>';
        echo '<p><strong>Experience Required:</strong> ' . $row['experienceRequired'] . ' years</p>';
        echo '<a href="apply.php?job_id=' . $row["jobID"] . '" class="job-apply-button">Apply</a>';
        
        echo '</div>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
