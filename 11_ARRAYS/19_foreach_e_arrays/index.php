<?php

$fabio = [
    'nome' => 'Fabio',
    'idade' => 30,
    'profissao' => 'desempregado'

];

$alexia = [
    'nome' => 'Alexia',
    'idade' => '35',
    'profissao' => 'Vendas',
];

foreach($fabio as $carac => $value) {

    echo "$carac => $value <br>";

}

echo "<br>";

foreach($alexia as $carac => $value) {

    echo "$carac => $value <br>";

}
