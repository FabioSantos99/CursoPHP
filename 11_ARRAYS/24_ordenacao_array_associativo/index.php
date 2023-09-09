<?php

$arr = [
    'Matheus' => 34,
    'Pedro' => 35,
    'Maria' => 35,
    'Midwest' => 39
];

asort($arr);

print_r($arr);
echo "<br>";

$arr2 = [
    'Matheus' => 24,
    'Pedro' => 65,
    'Maria' => 19,
    'Midwest' => 29
];

arsort($arr2);

print_r($arr2);
echo "<br>";

ksort($arr2);

print_r($arr2);
echo "<br>";