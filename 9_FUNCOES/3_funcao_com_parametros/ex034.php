<?php

function numeros($num) {
    if ($num%2 == 1) {
        echo "$num é impar <br>";
    } else {

        echo "$num é par <br>";

    }
}

numeros(6);
numeros(0);
numeros(11);
numeros(14);
numeros(15);
numeros(7);
numeros(22);