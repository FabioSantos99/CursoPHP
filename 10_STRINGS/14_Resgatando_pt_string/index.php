<?php

$str = "Esta é a minha string";

$minha = substr($str, 10, 5);

echo $str . "<br>"; // String pai, indice inicial, comprimento da palavra.

echo $minha . "<br>";

$str2 = "Testando esta string abc";

$novaString = substr($str2, 9); // omitir comprimento = pegar até o fim

echo $novaString . '<br>';

$novaString2 = substr($str2, 8, -3); // comprimento negativo = remover do ultimo indice.

echo $novaString2 . "<br>";