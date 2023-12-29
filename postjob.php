<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobTitle = $_POST["jobTitle"];
    $companyName = $_POST["companyName"];
    $jobLocation = $_POST["jobLocation"];
    $jobDescription = $_POST["jobDescription"];
    $skillsRequired = $_POST["skillsRequired"];
    $experienceRequired = $_POST["experienceRequired"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reg";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO jobs (jobTitle, companyName, jobLocation, jobDescription, skillsRequired, experienceRequired)
            VALUES ('$jobTitle', '$companyName', '$jobLocation', '$jobDescription', '$skillsRequired', '$experienceRequired')";
    
    if ($conn->query($sql) === TRUE) {
            echo "Data added successfully.";
            header("Location: jobview.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    $conn->close();
?>
