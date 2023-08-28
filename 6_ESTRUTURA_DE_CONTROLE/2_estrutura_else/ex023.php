<?php


$idade1 = 15;
$idade2 = 21;
$idade3 = 18;

$maioridade = 18;

$msg = " Você é maior de idade <br>";
$msg2 = " Você é menor de idade<br>";


if($idade1 >= $maioridade) {
    echo 1 . $msg;
} else {
    echo 1 . $msg2;

}

if($idade2 >= $maioridade) {
    echo 2 . $msg;
} else {
    echo 2 . $msg2;
}

if($idade3 >= $maioridade) {
    echo 3 . $msg;
} else {
    echo 3 . $msg2;
}

