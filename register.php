<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "reg";
$conn = new mysqli($servername, $username, $password, $db); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['Submit'])) {    
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $random_user_id = mt_rand(100000, 999999);
    $result = mysqli_query($conn, "INSERT INTO register (firstname, lastname, email, pass, user_id) VALUES ('$firstname', '$lastname', '$email', '$password', $random_user_id)");

    if ($result) {
        echo "Data added successfully.";
        header("Location: log.html");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>
</body>
</html>
