<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MRU</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
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
            margin-top: 20px;
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
    <form method="post">
        <h2>Teacher Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">

        <label for="ID">ID:</label>
        <input type="text" name="ID" id="ID">

        <input type="submit" name="okay" value="Okay">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = trim($_POST["username"]);
        $id = trim($_POST["ID"]);

        echo "<div class='message'>";
        if (empty($username)) {
            echo "<p class='error'>You didn’t enter the username.</p>";
        } elseif (empty($id)) {
            echo "<p class='error'>You didn’t enter the ID.</p>";
        } else {
            echo "<p class='success'>Login successfully!</p>";
            include("teacher.html");
        }
        echo "</div>";
    }
    ?>
</body>
</html>
