<?php

class Humano {
    public $idade = 29;

    public function falar() {

        echo "Olá mundo <br>";
    }
    private function gritar() {

        echo "PHP È MUITO BOM <br>";
    }
    public function acessaGritar() {

        $this->gritar();

    }

    protected function falarBaixinho() {
        echo "lalala <br>";
    }
    public function acessaFalarBaixinho() {
        $this->falarBaixinho();
    }


}

class Programador extends Humano {


}

$ze = new Humano;

$ze->falar();
$ze->acessaGritar();

$matheus = new Programador;

$matheus->idade . "<br>";

$matheus->falar();
$matheus->acessaGritar();

$ze->acessaFalarBaixinho();
