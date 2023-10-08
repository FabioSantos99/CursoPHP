<?php

require_once("db.php");
require_once("globals.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);
$userDao = new UserDAO($conn, $BASE_URL);

// Verificando o tipo de formulário
$type = filter_input(INPUT_POST, "type");

//verificação do tipo de formulário
if ($type === "register") {

    //Recebendo os inputs do formulário
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

    // verificação de dados minimos
    if($name && $lastname && $email && $password) {

        if($password === $confirmpassword) {

            //verificar se o email esta cadastrado no sistema
            if($userDao->findByEmail($email)=== false) {

                echo "Nenhum usuário foi encontrado!";

            } else {
                $message->setMessage("Usuario já cadastrado, tente outro email.", "error", "back");
            }

        } else {

            $message->setMessage("As senhas não são iguais,", "error", "back");
        }

    } else {

        //enviar uma msg de erro, de dados faltantes
        $message->setMessage("Por favor, preencha todos os campos", "error", "back");

    }


} else if($type === "login") {


}