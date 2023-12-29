<html>
    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="reg";
    $conn = new mysqli($servername, $username, $password,$db); 
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }
    echo "Connected successfully";
    if(isset($_POST['Submit'])) {    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['city'];
    $password = $_POST['subject'];
    $result = mysqli_query($conn,"INSERT INTO contact(firstname,lastname,city,subject) VALUES('$firstname','$lastname','$email','$password')");
    echo "Data added successfully.</font>"; 
    }
    ?>
    </body>
</html>
