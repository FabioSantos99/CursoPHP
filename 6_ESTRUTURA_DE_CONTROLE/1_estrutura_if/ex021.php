<?php

$o = 5;
$p = 2;
$q = "Matheus";
$r = "Pedro";
$t = "12";
$u = 11;
$z = "º valor deu certo";
$a = 1;

if($o >= $p) {
    echo $a++ . $z . "<br>";
}

if("$q" != $r){
    echo $a++ . $z . "<br>";
}

if($t >= $u){
    echo $a++ . $z . "<br>";
}

if(12 !== $t){
    echo $a++ . $z . "<br>";
}

echo gettype($a);


