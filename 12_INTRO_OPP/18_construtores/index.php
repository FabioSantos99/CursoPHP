<?php


class Car {
    
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {

        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
        
    }
}

$ferrari = new Car(4, "Vermelha", "Ferrari");

$bmw = new Car(4, "Cinza", "BMW");



echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor com  $ferrari->portas portas <br>";

echo "O carro é da marca $bmw->marca e tem a cor $bmw->cor com  $bmw->portas portas <br>";