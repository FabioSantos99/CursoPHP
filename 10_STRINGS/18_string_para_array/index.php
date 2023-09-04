<?php

$frase = "Test,ando ,o ex,plode";

$fraseArray = explode(" ",$frase );
print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(",",$frase);
print_r($fraseArray2);

for ($i = 0; $i < count($fraseArray2); $i++) {
    echo "$fraseArray2[$i]";
}