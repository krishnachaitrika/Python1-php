<?php
//creating an array
$class = array('Zeta','Epsilon','Thetha','Delta');

//printing elemnets using index number
echo $class[0] . "<br>";

//some operations
array_push($class,"Sigma");
array_pop($class);
array_shift($class);
array_push($class,"Sigma","Alpha");

//to print all elements in array
foreach ($class as $c){
    echo $c."<br>";
}

//counting no of elments in array
echo count($class);
?>