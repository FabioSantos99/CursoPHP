<?php

$host = "localhost";
$user = "root";
$pass = "asd";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno) {
    echo "Erro na Conexão! <br>";
    echo "Erro: " . $conn->connect_error;
}