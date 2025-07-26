
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" name="submit" value="Hash Password">
    </form>
</body>
</html>
<?php
if (isset($_POST["password"])) {
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash;
}
?>
