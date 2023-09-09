<?php

class Car {

    public $rodas = 40;
    public $aro = 20;
    public $cor = "Vermelha";

    function ligar() {
    echo "vruuummmm";
    }
}

$ferrari = new Car;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";

$ferrari->cor = "Azul";

echo $ferrari->cor;

$ferrari->ligar();