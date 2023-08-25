<?php

if(is_bool(true)){
    echo 'é um caractere booleano 1';
}

echo "<br>";

if(is_bool(false)){
    echo 'é um caractere booleano 2';
}

if(is_bool(4.5)){
    echo 'é um caractere booleano3';
}

echo "<br>";

if(is_float(4.5)){
    echo 'é um float';
}

echo "<br>";

if(is_int(2)){
    echo 'é um caractere inteiro';
}

echo "<br>";

if(is_string('ok')){
    echo 'é um string';
}

echo "<br>";

// Comparação


$Ana = 24;

$Alin = 22;

if($Alin < $Ana){

    echo "Ana é mais velha do que Alin.";
}




