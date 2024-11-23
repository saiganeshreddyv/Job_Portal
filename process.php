<?php
$host = "localhost"; 
$username = "root";
$password = "";
$database = "reg";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$jobTitle = $_POST['jobTitle'];
$companyName = $_POST['companyName'];
$jobLocation = $_POST['jobLocation'];
$jobDescription = $_POST['jobDescription'];
$skillsRequired = $_POST['skillsRequired'];
$experienceRequired = $_POST['experienceRequired'];

$sql = "INSERT INTO jobs (jobTitle, companyName, jobLocation, jobDescription, skillsRequired, experienceRequired) VALUES ('$jobTitle', '$companyName', '$jobLocation', '$jobDescription', '$skillsRequired', '$experienceRequired')";

if ($conn->query($sql) === TRUE) {
    echo "Job posted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





