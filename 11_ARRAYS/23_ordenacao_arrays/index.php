<?php

$arr = [2, 4, 3, 11, 54, 32, 8, 99];
print_r($arr);

sort($arr);
rsort($arr);


echo "<br>";
echo "<br>";

$j = 0;

for ($i = 0; $i < count($arr);$i++) {
    
     $j++;
     echo $j . "º posição: " . $arr[$i] . "<br>";
}


$nomes = ['João', "Maria", 'Alina', "Leticia"];

sort($nomes);
print_r($nomes);