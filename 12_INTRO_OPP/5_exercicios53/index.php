<?php

class Cachorro {
    
    function latir() {

        echo "Cachorro esta latindo <br>";

    }

    function andar($m) {

        echo " andou $m metros <br>";

    }
}

$poodle = new Cachorro;
$viralata = new Cachorro;

$poodle-> latir();
$viralata-> andar(400);
$poodle-> andar(550);