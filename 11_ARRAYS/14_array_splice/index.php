<?php


//RESGATAR ELEMENTOS DE ARRAY
// REMOVER ELEMENTOS

$arr = [1, 2, 3, 4, 5, 6];

$removidos = array_splice($arr, 4, 5);

print_r($arr);
echo "<br>";

print_r($removidos);
echo '<br>';

$arr2 = [1,2,3,4,5,6];

$removidos2= array_splice($arr2,3);

print_r($arr2);
echo "<br>";

print_r($removidos2);
echo "<br>";

