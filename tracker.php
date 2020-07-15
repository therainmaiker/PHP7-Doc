<?php   

$name =  "omar" ;
$weightKg =  50;
$heightCm =  155;
$heightM =  $heightCm/100 ;

$heightMcarre =  $heightM * $heightM ;


$IMC = $weightKg / $heightMcarre;

echo " Hello  " , $name  ," ,  your IMC is   "  , $IMC ;



?>
