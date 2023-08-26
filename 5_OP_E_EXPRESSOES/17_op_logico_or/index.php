<?php

if(5>2 || 3>5) {
    echo 'a operação é verdadeira 1 <br>';
}

if(11 < 22 || 8 > 2) {
    echo 'a operação é verdadeira 2 <br>';
}

if(3<2 || 3>5) {
    echo 'a operação é verdadeira 3<br>';
}

$a = 9;
$b = 11;
$c = 14;
$d = 18;

if($a <= $b || $d > $b) {
    echo " a operação é verdadeira 4";
}

if($d <= $a || $d > $c) {
    echo " a operação é verdadeira 5 <br>";
}

if($c <= $a || $b > $d) {
    echo " a operação é verdadeira 6 <br>";
}

if(($a > $b && $d < $c) || $c < $d){
    echo " a operação é verdadeira 7 <br>";
}