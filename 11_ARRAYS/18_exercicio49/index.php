<?php

$marca = 'Honda';
$modelo = "Civic";
$motor = "2.0";
$rodas = 4;
$tetoSolar = false;


$carro = compact('marca', 'modelo', 'motor', 'rodas', 'tetoSolar');

print_r($carro);
echo "<br>";

foreach($carro as $caracteristica => $value) {

    echo "$caracteristica: $value <br>";
}