<?php

function velocidadeMaxima($vel) {
    if(is_int($vel)) {
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor , passe apenas numeros inteiros <br>";
    }
}

velocidadeMaxima(250);
velocidadeMaxima(574);
velocidadeMaxima(234);

$velocidade = 149;

velocidadeMaxima($velocidade);

// PHP ignora parâmetro desnecessario.
velocidadeMaxima(250, "teste");
velocidadeMaxima("teste");

function descreverAnimal($nome, $raca) {
    echo "O $nome é da $raca <br>";
}

descreverAnimal("Bob", "Pastor Alemão");
descreverAnimal("Shark", "Vira-Lata");
descreverAnimal("Caim", "Esquilo");
