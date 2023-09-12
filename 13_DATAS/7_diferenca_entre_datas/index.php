<?php

$data = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2022, 10, 15);

print_r($data);
echo "<br>";
print_r($dataB);
echo "<br>";

$diferenca = $data->diff($dataB);

print_r($diferenca);
echo "<br>";

echo $diferenca->format("%a days");
echo "<br>";


