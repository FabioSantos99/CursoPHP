<?php

$arr = [
  'cor' => 'vermelho',
  'forma' => 'retangular',
  'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Fabio";

$pessoa = [
  'nome' => 'João',
  'idade' => 30
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";
