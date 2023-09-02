<?php

$arr = [];

for ($i = 0; $i < 31; $i++) {
    array_push($arr, $i);
}


function arrayMaiorqueSete($array) {

$arrayretorno = [];

    for($j = 0; $j < count($array); $j++) {

        if($array[$j] > 7) {

            array_push($arrayretorno, $array[$j]);

        }
    }
    return $arrayretorno;
    
}

$novoArray = arrayMaiorqueSete($arr);

print_r($novoArray);