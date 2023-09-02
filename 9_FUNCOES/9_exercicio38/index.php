<?php

$arr = ['Arroz', 'Feijao', "carne", "cenoura", "batata"];


function supermercado($array) {

    return implode (", ",$array);

}


function listaMercado($lista) {
    $str = "VocÊ levou estes itens do mercado: ";

    for ($i = 0; $i < count($lista); $i++) {

        if($i + 1 == count($lista)) {

            $str .= "$lista[$i].";

        } else {
            $str .= "$lista[$i],";
        }
    }

    return $str;

}

echo supermercado($arr) . "<br>";
echo listaMercado($arr);



