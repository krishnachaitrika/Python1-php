
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label> Enter ur age: </label>
        <input type = "text" name = "Age"><br>
    </form>
</body>
</html>
<?php
//And operator
$age = $_POST["Age"];
$citizen = false;
if ($age >= 18 && $citizen) {
    echo "ur are eligible to vote<br>";
}
else {
    echo "Ur still not eligible to vote<br>";
}
// Or operator
$child = true ;
$adult = False;
$ticket = null;
if($child || $adult) {
    $ticket = 10;
}
else {
    $ticket = 15;
}
echo "ticket cost is {$ticket}";
?>