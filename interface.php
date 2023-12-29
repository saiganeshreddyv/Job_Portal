<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        div {
            text-align: center;
            margin-top: 100px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: lightgreen;
            
        }

        input[type="submit"]:hover {
            background-color: #4CAF50;
            color: white;
        }

/* You can add more styling as needed */

    </style>
</head>
<body>
    <div>
        <input type="submit" value="Admin" onclick="redirectToAdminPage()">
        <input type="submit" value="User" onclick="redirectToUserPage()">
    </div>

    <script>
        function redirectToAdminPage() {
            window.location.href = 'alog.html';
        }

        function redirectToUserPage() {
            window.location.href = 'log.html';
        }
    </script>
</body>
</html>
