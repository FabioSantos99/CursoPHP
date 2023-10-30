<?php

class Cachorro {

public $nome;
public $patas;
public $raca;
public $cor;

function __construct($nome, $patas, $cor){

    $this->nome = $nome;
    $this->patas = $patas;
    $this->cor = $cor;

 }

 public function exibirAnimal() {

    echo "O nome do(a) cachorro(a) é $this->nome, ele tem a cor $this->cor, e tem $this->patas patas<br>";
 }

}

$alice = new Cachorro("Alice", 4, "Caramelo");

$nala = new Cachorro("Nala", 4, "Preto" );

$alice->exibirAnimal();
$nala->exibirAnimal();

$nome = "Thor";
$cor = "Branco";
$patas = 4;

$tubarao = new Cachorro($nome, $patas, $cor);

$tubarao->exibirAnimal();
