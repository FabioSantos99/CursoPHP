 <?php

 class Pessoa {

    function falar() {
        echo "Óla, eu sou um objeto! <br>";
    }

    function somar($x, $y) {
        echo $x + $y . "<br>";
    }

 }

 $Fabio = new Pessoa;

 $Fabio->falar();
 $Fabio->falar();

 $joao = new Pessoa;

 $joao->falar();

 $Fabio->somar(5, 6);
 $joao->somar(11, 4);

