<?php


$arr = [
    "Carro" => 20000,
    "caneta" => 2.50,
    "cafeteira" => 20,
    "caderno" => 8,
    "Porta" => 90,
    "estojo"=> 5.50,
    "Pia" => 400
];

function objetos($arr) {

    $arrItensCaros = [];

    foreach($arr as $item => $preco) {

        if($preco > 10) {

            array_push($arrItensCaros, $item);
        }
    }

return $arrItensCaros;

}

$result = objetos($arr);

print_r($result);
echo "<br>";
var_dump($result);