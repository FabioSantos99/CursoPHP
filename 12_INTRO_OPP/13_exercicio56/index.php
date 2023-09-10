<?php

class Humano {
    public $nacionalidade = 'brasileiro';

    private function falar() {

        echo "Hello everyone";
    }

    public function acessaFalar() {

        $this->falar();
    }

}

class Professor extends Humano {


public $disciplina =  "Matemática";


public function aulaMateria() {

    echo "O professor esta dando aula de $this->disciplina <br>";
 }

}



$fabio = new Humano;
$fabio->acessaFalar();
echo "<br>";
echo $fabio->nacionalidade ."<br>";


$gabriel = new Professor;

echo "$gabriel->nacionalidade <br>";
echo "$gabriel->disciplina <br>";
$gabriel->acessaFalar();