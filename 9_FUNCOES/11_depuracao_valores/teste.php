<?php

function sumDigits($num) {
    
    $soma = 0;
    while($num > 0) {
        $resto = $num % 10;
        $num = ($num - $resto)/10;
        $soma = $soma + $resto;
    }

    return $soma;
  
}

echo SumDigits(1993);