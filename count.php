<?php
/* error_reporting(0); */
//$autos = array("Volvo", "BMW", "Toyota");
//echo count($autos);
//$autos = ["Volvo", "BMW", "Toyota"];

$autos = [];

$autos[] = "Suzuki";
$autos[] = "Toyota";


echo sizeof($autos);
var_dump($autos);


for ($i=0; $i < sizeof($autos); $i++) { 
    echo "\n{$autos[$i]}";
}