<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);

$sql = "SELECT * FROM itens";

$result =  $conn->query($sql);

print_r($result);


$conn->close();