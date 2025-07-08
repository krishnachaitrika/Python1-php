<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1> FILL UR LOGIN CREDENTIALS </h1>
    <form action = "index.php" method = "post">
        <label> Firstname: </label>
        <input type = "text" name = "firstname"><br>
        <br>
        <label> Middlename: </label>
        <input type = "text" name = "middlename"><br>
        <br>
        <label> Lastname: </label>
        <input type = "text" name = "lastname"><br>
        <br>
        <label> Phonenumber: </label>
        <input type = "tel" name = "phonenumber" placeholder="10-digit number"><br>
        <br>
        <label> Email-Id: </label>
        <input type = "email" name = "email"><br>
        <br>
        <label> Gender: </label>
        <input type = "radio" name = "gender" value = "male">MALE
        <input type = "radio" name = "gender" value = "female">FEMALE
        <input type = "radio" name = "gender" value = "other"> OTHER <br>
        <br>
        <label>Address:</label>
        <textarea name="address" placeholder="mention ur address"></textarea><br>
        <br>
        <input type = "submit" name = "submit">
        </form>
        </center>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    switch (isset($_POST["submit"])) {
        case (empty($_POST["firstname"]));
        echo "Please Enter ur Firstname";
        break;
        case (empty($_POST["middlename"]));
        echo "Please Enter ur Middlename";
        break;
        case (empty($_POST["lastname"]));
        echo "Please Enter ur Lastname";
        break;
        case (empty($_POST["phonenumber"]));
        echo "Please Enter ur Phonenuber";
        break;
        case (empty($_POST["email"]));
        echo "Please Enter ur E-mail";
        break;
        case (empty($_POST["gender"]));
        echo "Select ur Gender";
        break;
        case (empty($_POST["address"]));
        echo "Please Enter a Valid Address";
        break;
    }
}
?>