<?php

function defineCorCarro($cor = "vermelha") {

    return "a cor do carro é $cor";
    
}

$result = defineCorCarro();

echo $result . "<br>";

$carroAzul = defineCorCarro("Preto");

echo $carroAzul . "<br>";