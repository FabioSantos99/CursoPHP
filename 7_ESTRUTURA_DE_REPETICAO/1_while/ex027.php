<?php


$a = [1, 4, 2, 'next', 4.5, 'arroz', 'pedra', true, 'max', "10", 0.00003, "wix", 10];

$x = count($a);
$y = 0;

while($y < $x){

    if(is_string($a[$y])) {
        echo $a[$y] . "<br>";
    }

    $y++;
}



