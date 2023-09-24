<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'aula';


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) { 
    die("Falha na conexão: (" . $conn->connect_errno . ")" . $conn->connect_errno);
}

