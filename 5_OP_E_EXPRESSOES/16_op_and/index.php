<?php

if(5 > 10 && 10 > 5) {
    echo "Entrou no if 1<br>";
}

if(50 > 10 && 10 > 5) {
    echo "Entrou no if 2<br>";
}


if(50 > 10 && 10 > 500) {
    echo "Entrou no if 3<br>";
}

$a = 14;
$b = 23;
$c = -3;
$d = 4;

if($a < $b && $d <= $b) {
    echo "Entrou no if 4 <br>";
}

if($a > $b && $d <= $b) {
    echo "Entrou no if 5 <br>";
}

if($a >= $d && $d >= $c && $c < $b) {
    echo "Entrou no if 6 <br>";
}

if($a < $d && $d >= $c && $c < $b) {
    echo "Entrou no if 7 <br>";
}