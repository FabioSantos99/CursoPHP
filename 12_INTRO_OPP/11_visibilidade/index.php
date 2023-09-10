<?php

class Car {

    public $rodas = 4;
    private $vidro = "Sem pelicula";

    protected $portas = 4;

    public function getPortas() {

        return $this->portas;
    }

    public function getVidro() {
        return $this->vidro;
    }

    public function peliculadeFabrica($pelicula) {
        $this->vidro = $pelicula;
    }

}

class Mecanico {
    public function alternarRodas($carro) {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {

        $carro->vidro = $pelicula;

    }
}
 
$carro = new Car;

$fabio = new Mecanico;

echo $carro->rodas . "<br>";

$fabio->alternarRodas($carro);

echo $carro->rodas . "<br>";

//Não pode alterar porque é privado
//$fabio->colocarPelicula($carro, "G20");

//$carro->peliculadeFabrica("G10");
echo $carro->getVidro() . "<br>";

echo $carro->getPortas() . "<br>";