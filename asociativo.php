<?php
// Array asociativo
/* 
JSON
{
    "nombre": "Juan",
    "apellido": "Céspedes",
    "edad": 47
}

*/

$persona1 = [
    "nombre" => "Juan",
    "apellido" => "Céspedes",
    "edad" => 47,
//  $key => $value
];

$persona2 = [
    "Mateo",
    "Lucas",
    45 => "Marcos",
    "Juan",
    13 => "Jesús",
    "Judas"
];

var_dump($persona1);
echo $persona1["nombre"];
/* for ($i=0; $i < sizeof($persona1); $i++) { 
    echo "\n$persona1[$i]";
} */

foreach ($persona1 as $clave => $valor) {
    echo "\n$clave -----> $valor";
    echo "\n\t\t ************> {$persona1[$clave]}";
}

echo "\n========================\n";

foreach ($persona2 as $key => $value) {
    echo "\n{$key}) {$value}";
}

$datos = file_get_contents("https://dolar.melizeche.com/api/1.0/");
$arrayAsociativo = json_decode($datos, true);
//echo $arrayAsociativo["dolarpy"]["bcp"]["compra"];
echo "\nCASAS DE CAMBIO\n";
foreach ($arrayAsociativo["dolarpy"] as $banco => $precios) {
    echo "\nBanco {$banco} | Venta: {$precios["venta"]} Compra: {$precios["compra"]}";
}

