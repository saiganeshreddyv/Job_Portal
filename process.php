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

// Get values from the form
$jobTitle = $_POST['jobTitle'];
$companyName = $_POST['companyName'];
$jobLocation = $_POST['jobLocation'];
$jobDescription = $_POST['jobDescription'];
$skillsRequired = $_POST['skillsRequired'];
$experienceRequired = $_POST['experienceRequired'];

// Add more variables for additional attributes

// Insert data into the database
$sql = "INSERT INTO jobs (jobTitle, companyName, jobLocation, jobDescription, skillsRequired, experienceRequired) VALUES ('$jobTitle', '$companyName', '$jobLocation', '$jobDescription', '$skillsRequired', '$experienceRequired')";

if ($conn->query($sql) === TRUE) {
    echo "Job posted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>





