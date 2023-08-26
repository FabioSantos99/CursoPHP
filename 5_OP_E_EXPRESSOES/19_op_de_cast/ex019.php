<?php

$a = (float) 5;

if($a === 5.0) {
    echo "A é igual a 5 <br>";
}

$b = (int) "testando";

if($b != "testando") {
    echo "Operação 1 é verdadeira <br>";
}

$c = (int) 12.9;
$d = (int) true;
$e = (int) [1,2,3];

echo $c;
echo "<br>";

echo $d;
echo "<br>";
echo $d + 2;
echo "<br>";
if($d === 1) {
    echo "Operação 2 é verdadeira <br>";
}

echo $e;
echo "<br>";

$f = (float) "unfkfrkf";
echo $f;
