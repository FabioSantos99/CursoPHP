<?php

$nomes = ["Joao", "Pedro", "Maria", "Elias", "Diego"];

$a = 10;

foreach($nomes as $nome) {
    echo "O nome o índice atual é $nome <br>";
    if($nome == "Pedro"){
        echo "Opa $a <br>";
    }
}

