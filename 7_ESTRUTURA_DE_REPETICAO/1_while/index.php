<?php

// A definição do contador
$x = 0;

// Inicio / definição de estrutura
while($x < 10) {

//corpo do loop
    echo $x . '<br>';

    // incremento do contador.
    $x++;

}

echo "Continuando código";
echo "<br>";
echo "<br>";



// A definição do contador
$y = 0;

// Inicio / definição de estrutura
while($y <= 10) {
    
//corpo do loop
    echo $y . '<br>';

    // incremento do contador.
    $y += 2;

}

echo "Continuando código";

$z = 10;

while($z >= 0) {
    echo $z . "<br>";
    $z--;
}
echo "<br>";


$a = 10;

while($a >= 0) {

    if($a % 2 != 0) {
        echo $a . "<br>";
    }

    $a--;
}