<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        /* styles.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
    
.container {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 10px;
    margin-bottom: 16px;
}

button {
    padding: 12px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

a {
    text-decoration: none;
    color: #007bff;
}

a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>

<?php
// Start or resume the session
session_start();

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Check if form is submitted for updating user data
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Update user data in the session
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
}
?>

<div class="container">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" required>

        <button type="submit" name="update">Update</button>
    </form>

    <p><a href="logout.php">Logout</a></p>
</div>

</body>
</html>
