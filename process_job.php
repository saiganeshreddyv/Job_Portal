<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <style>
        /* Add your CSS styles here */
        .job-listing {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>

<?php
// Establish a connection to the database
$host = "localhost";  // e.g., "localhost"
$username = "root";
$password = "";
$database = "reg";

$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch job data from the database
$sql = "SELECT * FROM jobs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Display each job listing
        echo '<div class="job-listing">';
        echo '<h2>' . $row['jobTitle'] . '</h2>';
        echo '<p><strong>Company:</strong> ' . $row['companyName'] . '</p>';
        echo '<p><strong>Location:</strong> ' . $row['jobLocation'] . '</p>';
        echo '<p><strong>Description:</strong> ' . $row['jobDescription'] . '</p>';
        echo '<p><strong>Skills Required:</strong> ' . $row['skillsRequired'] . '</p>';
        echo '<p><strong>Experience Required:</strong> ' . $row['experienceRequired'] . ' years</p>';
        // Add more lines for additional attributes
        echo '</div>';
    }
} else {
    echo "No jobs found.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>-->







<!-- jobs.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Page</title>
    <style>
        /* Your CSS styles go here */
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
// Assuming you have already established a database connection here
$host = "localhost";  // e.g., "localhost"
$username = "root";
$password = "";
$database = "reg";

$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch job details from the database
$sql = "SELECT * FROM jobs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="job-container">';
//        echo '<div class="job-title">' . $row["jobTitle"] . '</div>';
//        echo '<div class="job-company">' . $row["companyName"] . '<i> - ' . $row["jobLocation"] . '</i></div>';
//        echo '<div class="job-skill">' . $row["skillsRequired"] . '</div>';
        // Add more lines for additional attributes
        echo '<h2>' . $row['jobTitle'] . '</h2>';
        echo '<p><strong>Company:</strong> ' . $row['companyName'] . '</p>';
        echo '<p><strong>Location:</strong> ' . $row['jobLocation'] . '</p>';
        echo '<p><strong>Description:</strong> ' . $row['jobDescription'] . '</p>';
        echo '<p><strong>Skills Required:</strong> ' . $row['skillsRequired'] . '</p>';
        echo '<p><strong>Experience Required:</strong> ' . $row['experienceRequired'] . ' years</p>';
        // Apply button linking to the job application page (you can customize the link)
        echo '<a href="apply.php?job_id=' . $row["jobID"] . '" class="job-apply-button">Apply</a>';
        
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>

</body>
</html>
