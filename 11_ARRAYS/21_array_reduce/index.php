<?php
$arr = [1, 2, 4, 6, 11, 15, 16, 21,];

function soma($a, $b) {
    return $a + $b;
}

function subtrair($a, $b) {
    return $a - $b;
}

$resultado = array_reduce($arr, "soma");

echo $resultado . "<br>";

$resultado2 = array_reduce($arr, "subtrair");
echo $resultado2 . "<br>";
