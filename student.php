<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login - MRU</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .message {
            margin-top: 15px;
            text-align: center;
            font-weight: bold;
        }

        .error {
            color: #e74c3c;
        }

        .success {
            color: #27ae60;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Student Login</h2>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">

            <label for="rollno">Roll No:</label>
            <input type="text" name="rollno" id="rollno">

            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = trim($_POST["username"]);
            $rollno = trim($_POST["rollno"]);

            echo "<div class='message'>";
            if (empty($username)) {
                echo "<p class='error'>You didn't enter the username.</p>";
            } elseif (empty($rollno)) {
                echo "<p class='error'>You didn't enter the roll number.</p>";
            } else {
                echo "<p class='success'>Login successfully!</p>";
                include("student.html");
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
