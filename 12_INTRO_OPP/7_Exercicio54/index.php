<?php

 class Pessoa {

    public $nome = "Fabio";
    public $idade = 22;

    function andar($km) {

        echo "andou $km km <br>";
    }


 }

 $pessoa1 = new Pessoa;

echo $pessoa1-> nome . "<br>";
echo $pessoa1-> idade . "<br>";

$pessoa1->andar(10);

$pessoa1->nome = "Marta";
$pessoa1->idade = 34;

echo "O nome dela é $pessoa1->nome e tem $pessoa1->idade anos <br>";
