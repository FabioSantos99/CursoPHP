<?php

class Calculadora {

    public function somar($a, $b) {

        return $a + $b;
    }

    public function subtrair($a, $b) {

        return $a - $b;
    }


    public function multiplicar($a, $b) {

        return $a * $b;
    }


    public function dividir($a, $b) {

        return $a / $b;
    }


}

$operacao = new Calculadora;

echo $operacao->somar(5,7);
echo "<br>";
echo $operacao->subtrair(67,56);
echo "<br>";
echo $operacao->multiplicar(11, 3);
echo "< br>";
echo $operacao->dividir(20,5);