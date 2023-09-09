<?php

$numeros = [34, 2, 21, 4, 33, 23,14,3];


function ordenarNumeros($arr) {

    $newArray = [];
    
    for ($i = 0; $i < count($arr); $i++) {
        array_push($newArray,$arr[$i]);
        sort($newArray);
    }

    return $newArray;
}

$result = ordenarNumeros($numeros);

print_r($result);

