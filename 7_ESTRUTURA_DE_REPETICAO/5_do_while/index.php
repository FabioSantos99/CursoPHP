<?php

$j = 0;

$teste = "Fabio";

do {
    echo "Testando do while $j<br>";
    if($j == 2) {
        echo "$teste <br>";
    }
    $j++;

} while ($j < 10);

$i = 10;

do {
    echo "Testando do while 2 $i <br>";

    if($i == 2) {

        echo "$teste <br>";
    }

    $i--;

} while ($i > 0);