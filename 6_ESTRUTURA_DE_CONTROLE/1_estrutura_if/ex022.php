<?php

$idade1 = 15;
$idade2 = 21;
$idade3 = 18;

$maioridade = 18;

$msg = " Você é maior de idade <br>";


if($idade1 >= $maioridade) {
    echo $msg;
}

if($idade2 >= $maioridade) {
    echo 2 . $msg;
}

if($idade3 >= $maioridade) {
    echo 3 . $msg;
}