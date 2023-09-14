<?php

$usuario = [

    'nome' => 'Mateus',
    'idade' => 29,
    'profissao' => 'Programador',
];

if($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>

        <div>
            <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>">
        </div>

        <div>
            <input type="text" name="profisaao" placeholder="Digite sua profissao" value="<?= $profissao ?>">
        </div>
    </form>
</body>
</html>