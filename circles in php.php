
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label> Radius : </label>
        <input type = "text" name = "Radius"><br>
        <input type = "submit" value ="okay">
    </form>
</body>
</html>
<?php
$r = $_POST["Radius"];
$cir = null;
$area = null;
$volume = null;
$cir = 2 * pi() * $r;
$cir = round($cir,2);
$area = pi() * pow($r,2);
$area = round($area,2);
$volume = 4/3 * pi() * pow($r,3) ;
$volume = round($volume,2);
echo " total circumference of the circle {$cir}<br>";
echo " total Area of the circle {$area}<br>";
echo " total volume of the circle {$volume}<br>";
?>