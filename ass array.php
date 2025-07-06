<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form cation ="index.php" method = "post">
        <label>Roll no:
        </label>
        <input type = "text" name = "rollno">
        <input type = "submit" name = "submit">
</form>

</body>
</html>
<?php
// creating associative array
$class =  array( 1 => "chaitrika" ,
           2 => "krishna",
           3 => "kyle",
           4 => "Adrain"
);
 echo $class[1]."<br>";

//update or add new elemnt
$class[5] = "levi";

//operations on it
array_pop($class);
array_Shift($class);

//printing the keys
$keys = array_keys($class);
foreach($keys as $key) {
    echo $key."<br>";
}

//printing all keys and values
 foreach ($class as $c => $v){
    echo "{$c} = {$v}"."<br>";
 }

 // fliping keys as values and values as keys
 array_flip($class);
foreach ($class as $c => $v){
    echo "{$c} = {$v}"."<br>";
}

// for the html code above!!!
    $class[4]="Adien";
    $class[5]="levi";
    $classes = $class[$_POST ["rollno"]];
    echo $classes."<br>";
?>
