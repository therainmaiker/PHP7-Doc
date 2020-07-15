<?php   

$name = $_GET ['omar'];
$weightKg = $_GET ['50'];
$heightCm = $_GET ['155'];
$heightM = $_GET ['$heightCm/100'];

echo $name , $weightKg / $heightCm ;
?>
