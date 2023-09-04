<?php

function countVowels($str) {

    $contadorVogais = 0;

    for($i=0; $i < strlen($str); $i++)
     {
        if($str[$i] === "a") {

            $contadorVogais++;
        }

         if($str[$i] === "e") {

            $contadorVogais++;
        }

        if($str[$i] === "i") {

            $contadorVogais++;
        }

         if($str[$i] === "o") {

            $contadorVogais++;
        }

         if($str[$i] === "u") {

            $contadorVogais++;
        }
        
    }

        echo "$contadorVogais <br>";
 }




countVowels("auiaoaiaaeeeee");
















































// $num = 17; // definindo o número para saber se é primo

//     echo "Analisando o numero: $num...<br>";
//     $a = 0; // acumulador
    
//     echo"Valores mútiplos: ";
//     //Definindo laço para repetir pela quantia informada
//     for ($i=1; $i<=$num; $i++) {
//       $r = $num % $i;
//       if ($r == 0) { //caso sobre 0 entre a divisão do contador do laço pelo numero acrescento mais 1 no acumulador
//         $a++;
//         echo "$i ";
//       }
//     }
//     if ($a > 2) { //caso o resto das divisões somadas sejam maior que 2 significa que o número não é primo
//       echo"<br>Total de múltiplos: $a<br>";
//       echo"Resultado: $num NÃO É PRIMO!";
//     }else{ //Se não o número é primo
//       echo"<br>Total de múltiplos: $a<br>";
//       echo"Resultado: $num É PRIMO!";
//     }

