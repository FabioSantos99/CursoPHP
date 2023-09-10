<?php


function isPrime($num) {


    echo "Analisando o numero: $num...<br>";

    $multiplos = 0;
    echo"Valores mútiplos: ";

    for ($i=1; $i<=$num; $i++){

        $resto = $num % $i;
        if($resto == 0) {

            $multiplos++;

            echo "$i ";

        }
    }

    if ($multiplos > 2) {

        echo"<br>Total de múltiplos: $multiplos<br>";
        echo"Resultado: $num NÃO É PRIMO!";

    } else {

        echo " $num É PRIMO <br>";

    }

}
isPrime(30);



//     $num = 10; // definindo o número para saber se é primo
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
