<?php

$host = 'localhost';
$user = 'root';
$pass = "";
$db = 'curso_php';

$conn = new mysqli($host, $user, $pass, $db);

//ASSUNTO DA AULA

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn-> close();

// Um Resultado
$itens = $result->fetch_assoc();

// TODOS OS RESULTADOS

$itens = $result->fetch_all();

print_r($itens);

