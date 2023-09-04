<?php


function construirFrase($frase){

$contadorDeAs = 0;

for ($i =0; $i < strlen($frase); $i++) {
    
    if ($frase[$i] === 'r') {

        $contadorDeAs++;
    }

 }
 
 echo "O número de r´s na frase é de: $contadorDeAs"; 

}

construirFrase("O rato roeu a roupa do rei de roma");