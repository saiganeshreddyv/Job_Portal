<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "reg";
$conn = new mysqli($servername, $username, $password, $db); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



if (isset($_POST['submit'])) {   
    $user=$_POST['user'];   
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $dob = $_POST['dob']; 
    $email = $_POST['text1'];
    $phnum = $_POST['phnum'];
    $gender = $_POST['gender'];
    $languages = $_POST['lang'];
    $skills = $_POST['skills'];
    $expe = $_POST['expe'];

    $result = mysqli_query($conn, "INSERT INTO jregistration (user_id,`First Name`, `Last Name`, DOB, Email, `Mobile Number`, Gender, Languages, Skills, Experience) VALUES ('$user','$firstname', '$lastname', '$dob', '$email', '$phnum', '$gender', '$languages', '$skills', '$expe')");

    if ($result) {
        echo "Data added successfully.";
        
        header("Location: jregister.php?jobTitle=$jobTitle&companyName=$companyName");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    } 
}
?>
<html>
    <head>
        <title>REGISTRATION FORM</title>
        <link rel="stylesheet" href="jregister.css" type="text/css">
    </head>
    <body onload='document.form1.text1.focus()'>
        <div class="main">
            <div class="register">
                <h1>REGISTER HERE</h1>
                <p>Job Title: <?php echo $jobTitle; ?></p>
                <p>Company Name: <?php echo $companyName; ?></p>
                <form method="post" name="form1" action="jregister.php">

                </form>
            </div>
        </div>
    </body>
</html>
