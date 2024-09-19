<?php

/* 
$autos = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
); */


$autos = [
    ["Volvo", 22, 18],
    ["BMW", 15],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15]
];

for ($i=0; $i < sizeof($autos); $i++) { 
    //echo "Marca: {$autos[$i][0]}| Venta: {$autos[$i][1]} | Saldo: {$autos[$i][2]}\n";
    for ($p=0; $p < sizeof($autos[$i]); $p++) { 
        echo "\n {$autos[$i][$p]}";
    }
}

$autos = [
    ["marca" => "Volvo", "venta" => 22, "saldo" => 18],
    ["marca" => "BMW", "saldo" => 15],
    ["marca" => "Saab", "venta" =>5,"saldo" =>  2],
    ["marca" => "Land Rover", "venta" =>17, "saldo" => 15],
];

$texto = "";
for ($i=0; $i < sizeof($autos); $i++) { 
    //echo "Marca: {$autos[$i]["marca"]}| Venta: {$autos[$i]["venta"]} | Saldo: {$autos[$i]["saldo"]}\n";
    $texto .= "\n";
    foreach ($autos[$i] as $key => $value) {
        $texto .= "{$key}: {$value} | ";
    }
}
echo $texto;


$autos = [
    ["marca" => "Volvo", "venta" => 22, "saldo" => 18],
    ["marca" => "BMW", "saldo" => 15],
    ["marca" => "Saab", "venta" =>5,"saldo" =>  2],
    ["marca" => "Land Rover", "venta" =>17, "saldo" => 15],
];

$texto = "\nAUTOS CON FOREACH!\n";
foreach ($autos as $k => $v) {
    //echo "Marca: {$autos[$i]["marca"]}| Venta: {$autos[$i]["venta"]} | Saldo: {$autos[$i]["saldo"]}\n";
    $texto .= "\n";
    foreach ($v as $key => $value) {
        $texto .= "{$key}: {$value} | ";
    }
}
echo $texto;


$autos = [
    "numero_1" => ["marca" => "Volvo", "venta" => 22, "saldo" => 18],
    "numero_2" => ["marca" => "BMW", "saldo" => 15],
    "tercero" => ["marca" => "Saab", "venta" =>5,"saldo" =>  2],
    "no_venta" => ["marca" => "Land Rover", "venta" =>17, "saldo" => 15],
];

$text = "\n\n\tNuevo con el foreach";
foreach ($autos as $key => $value) {
    $text .= "\n";
    foreach ($value as $etiqueta => $valor) {
        $text .= "{$etiqueta}: {$valor} | ";
    }
}

echo $text;