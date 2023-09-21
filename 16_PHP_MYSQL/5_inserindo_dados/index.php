<?php

$host = 'localhost';
$user = 'root';
$pass = "";
$db = 'curso_php';

$conn = new mysqli($host, $user, $pass, $db);


$table = 'itens';
$nome = 'Xicara';
$descricao = "É uma xícara branca inglesa";

$q = "INSERT INTO $table (nome, descricao) VALUE ('$nome', '$descricao')";

$conn->query($q);
$conn->close();

