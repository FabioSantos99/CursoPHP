<?php

class Humano {

    public function falar() {
        echo "Olá";
    }
}

$fabio = new Humano;

$test = 11;

if(is_object($fabio)) {

    echo "é um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

if(is_object($test)) {

    echo "É um objeto <br>";
} else {

    echo "Não é um objeto <br>";
}

echo get_class($fabio);

if(method_exists($fabio, "falar")) {
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}

if(method_exists($fabio, "asd")) {
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}