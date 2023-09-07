<?php

$alimento = ['batata','maça','pera','feijao','arroz'];

$remover = array_splice($alimento, 1,2);

print_r($alimento);
echo "<br>";
print_r($remover);