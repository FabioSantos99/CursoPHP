<?php

include('contagem.php');

session_start();
if(!isset($_SESSION['acesso_registrado']))
{
    $ip = $_SERVER['REMOTE_ADDR'];
    $navegador = $_SERVER['HTTP_USER_AGENT'];

    $consulta_registro_acesso = "INSERT INTO acessos(data, navegador, ip) VALUES (NOW(), '$navegador', '$ip')";

    $conn->query($consulta_registro_acesso) or die($conn->error);

    $_SESSION['acesso_registrado']=true; 
    // condição if para que a contagem de acesso seja somente por usuário
}

$consulta =  "SELECT count(*) as c FROM acessos WHERE DATE(data) = '2023-09-23'";
$query = $conn->query($consulta) or die ($conn->error);
$acessos = $query->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h1>Este site teve <?php echo $acessos['c']; ?> acessos</h1>

</head>
<body>
    
</body>
</html>