<?php

 class Humano {

    public $idade;
    public $nome;
    public $profissao;

    public function falar() {

    }

    public function escutar() {

    }
 }

 if(class_exists("Humano")) {

    echo "A classe existe <br>";
 }

 if(class_exists("Cachorro")) {
    echo "A classe existe";
 }else{
    echo "A classe não existe. <br>";
 }

 print_r(get_class_vars("Humano"));
echo "<br>";
 print_r(get_class_methods("Humano"));