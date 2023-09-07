<?php

$arr = [

    'nome' => 'Fabio',
    'idade' => 64
];

if(array_key_exists('nome', $arr)) {
    echo "A chave existe <br>";
} else {

    echo "A chave não existe <br>";
}

if(array_key_exists('empregp', $arr)) {
    echo "A chave existe <br>";
} else {

    echo "A chave não existe <br>";
}


if(isset($arr['nome'])) {
    echo "A chave existe! ISSET <br>";
} else {

    echo "A chave não existe. ISSET <br>";
}
