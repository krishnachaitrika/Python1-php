
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label> Name: </label>
        <input type = "text" name = "Name"><br>
        <label> Hours: </lable>
        <input type = "text" name = "Hours"><br>
        <input type = "submit" value ="okay">
    </form>
</body>
</html>
<?php
$h = $_POST["Hours"];
if ($h<=3) {
    echo "U have worked for less then or equal to 3h so ur payment is $70";
}
elseif($h>=3) {
    echo "u have worked for more the 3h so ur payment os $100";
}
else {
    echo "u have worked for more then 7h so ur payment is $150";
}
?>