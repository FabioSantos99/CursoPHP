<?php

$str =  "estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "java");

echo "$testeEncontrar <br>";


$palavra = "com";
$palavra2 = "to";

$testeEncontrar3 = strpos($str, $palavra);

echo $testeEncontrar3;

$testeEncontrar4 = strpos($str, $palavra2);

echo $testeEncontrar4;