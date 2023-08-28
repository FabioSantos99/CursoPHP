<?php

$h = 5;
$g = 4;
$j = "ola";
$k = "ola";


if($h > $g) {
    echo "entrou no primeiro if <br>";

    if($j === $k) {
        echo "entrou no segundo if <br>";
    }
}


if($h > $g) {
    echo "entrou no primeiro if 2<br>";
    if($j !== $k) {
        echo "entrou no segundo if <br>";
    } else {
        echo "entrou no segundo else 2 <br>";
    }
}


if($h < $g) {
    echo "entrou no primeiro if 2<br>";
    if($j !== $k) {
        echo "entrou no segundo if <br>";
    } else {
        echo "entrou no segundo else 2 <br>";
    }
} else {
    echo "entrou no terceiro else <br>";
}

if(is_int($k)|| is_int($h)) {

    echo "Deu certo <br>";

} else {
    echo "Entrara no else <br>";
}

$w = 13;
$z = 8;

$multi = $w * $z;

if($multi > 100 && $w == $z) {
    echo $multi . "Entrou no if 4";
} else {

    echo $multi . " "."Entrou no else";

}


