<?php

$x = 0;


while($x < 30) {
    echo $x . "<br>";

    if($x === 24) {
        echo "Terminando o loop <br>";
        break;
    }

    $x+= 2;
}
echo "Saindo do loop";