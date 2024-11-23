<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Posting</title>

    <style>
    h1, h2, p, label, input, textarea, button {
        margin: 0;
        padding: 0;
    }
    body {
        background-image: url('data:image/jpeg;base64,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'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0; 
        padding: 0; 
    }
    body {
        font-family: 'Arial', sans-serif;
    }

    .container {
        width: 80%;
        max-width: 600px;
        margin: 50px auto;
    }

    form {
        background: #f7f7f7;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin: 10px 0 5px;
        font-weight: bold;
    }

    input,
    textarea,
    button {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    textarea {
        height: 100px;
    }

    button {
        background: #007BFF;
        color: #fff;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
    }

    button:hover {
        background: #0056b3;
    }

    </style>
</head>
<body>

<div class="container">
    <form action="postjob.php" method="post">
        <label for="jobTitle">Job Title:</label>
        <input type="text" id="jobTitle" name="jobTitle" required>

        <label for="companyName">Company Name:</label>
        <input type="text" id="companyName" name="companyName" required>

        <label for="jobLocation">Job Location:</label>
        <input type="text" id="jobLocation" name="jobLocation" required>



        <label for="jobDescription">Job Description:</label>
        <textarea id="jobDescription" name="jobDescription" required></textarea>

        <label for="skillsRequired">Skills Required:</label>
        <input type="text" id="skillsRequired" name="skillsRequired" required>

        <label for="experienceRequired">Experience Required (in years):</label>
        <input type="number" id="experienceRequired" name="experienceRequired" required>


        <button type="submit">Post Job</button>
    </form>
</div>

</body>
</html>

</body>
</html>
