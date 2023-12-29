<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .profile-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="profile-container">
    <label for="firstName">First Name:</label>
    <p><?php echo isset($_SESSION["v1"]) ? $_SESSION["v1"] : ""; ?></p>

    <label for="lastName">Last Name:</label>
    <p><?php echo isset($_SESSION["v2"]) ? $_SESSION["v2"] : ""; ?></p>
    
    <label for="email">Email:</label>
    <p><?php echo isset($_SESSION["v3"]) ? $_SESSION["v3"] : ""; ?></p>

    User Id:
    <p><?php echo isset($_SESSION["v4"]) ? $_SESSION["v4"] : ""; ?></p>

    <button type="button" onclick="logout()">Logout</button>
    
    <script>
      function logout() {
        // Add your logout logic here, e.g., send an AJAX request or redirect to a logout page
        window.location.href = "log.php";
      }
    </script>
  </div>
</body>
</html>


