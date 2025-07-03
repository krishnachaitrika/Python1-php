<?php
$grade = 'C';
switch($grade) {
    case "A";
    echo "you have a perfect score";
    break;
    case "B";
    echo "you were okay";
    break;
    case "C";
    echo "can do better";
    break;
    case "D";
    echo "ur are very poor u have to improve";
    break;
    case "F";
    echo "U failed it!!!";
    break;
    default :
    echo "{$garde} is invalid!!";
}
?>