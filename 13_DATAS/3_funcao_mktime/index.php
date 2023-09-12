<?php

$dataNascimento = mktime(02, 12, 33, 02, 05, 1991);


echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

echo $dataNascimentoFormatada . "<br>";

$dataEspecifica = mktime(10, 20, 11, 28, 01, 2053);

$dataFuturaFormatada = date('m/d/y',$dataEspecifica);

echo $dataFuturaFormatada;