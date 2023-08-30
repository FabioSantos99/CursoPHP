<?php

$arr = [10,20,30,40,50,60,70,80,90,100];


$y = 0;

while ($y < count($arr)) {

    $numAtual = $arr[$y];

    if($arr[$y] == 30 || $arr[$y] == 40) {
        $y++;
        continue;
    }


   echo "Elemento: $numAtual <br>";

    $y++;


}