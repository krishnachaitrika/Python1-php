<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post"> 
        <input type = "radio" name = "gender" value = "male">MALE<br>
        <input type = "radio" name = "gender" value = "female">FEMALE<br>
        <input type = "radio" name = "gender" value = "other">OTHER<br>
        <input type = "submit" name = "submit">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])) {
    $g = null;
    if(isset($_POST["gender"])){
        $g = $_POST["gender" ];
    }
    switch($g) {
        case "male";
        echo "he is male";
        break;
        case "female";
        echo "she is a female";
        break;
        case "other";
        echo "they belong to different";
    }
}
?>