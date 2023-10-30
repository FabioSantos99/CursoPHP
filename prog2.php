<?php

class Caminhao {

    public $marca;
    public $cor;
    public $velMaxima;

    function setVelMaxima($vel) {
        $this->velMaxima = $vel;
    }

    function getVelMaxima() {

        echo "A velocidade máxima deste caminhão à: $this->velMaxima km/h <br>";

    }
}

$mercedez = new Caminhao;

$mercedez->cor = "preto";
$mercedez->marca = "Mercedez";
$mercedez->setvelMaxima(200);
$mercedez->getVelMaxima();


