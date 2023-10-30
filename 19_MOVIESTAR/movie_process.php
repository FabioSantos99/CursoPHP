<?php

require_once("db.php");
require_once("globals.php");
require_once("models/Movie.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");
require_once("dao/MovieDAO.php");

$message = new Message($BASE_URL);
$userDao = new UserDAO($conn, $BASE_URL);
$movieDao = new MovieDAO($conn, $BASE_URL);

// Resgata o tipo do formulário
$type = filter_input(INPUT_POST, "type");

//REsgata dados do usuário
$userData = $userDao->verifyToken();

if ($type === "create") { 

    //Receber od dados dos inputs
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $trailer = filter_input(INPUT_POST, "trailer");
    $category = filter_input(INPUT_POST, "category");
    $length = filter_input(INPUT_POST, "length");

    $movie = new Movie();

    // Validação minima de dados
    if(!empty($title) && !empty($description) && !empty($category)) {

        $movie->title = $title;
        $movie->description = $description;
        $movie->trailer = $trailer;
        $movie->category = $category;
        $movie->length = $length;
        $movie->users_id = $userData->id;


        // upload de imagem do filme
        if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_image"])) {

            $image = $_FILES["image"];
            $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
            $jpgArray = ["image/jpeg", "image/jpg"];

            // Checando tipo da imagem
        if(in_array($image["type"], $imageTypes)) {

            //Checa se imagem é jpg
            if(in_array($image["type"], $jpgArray)) {
                $imageFile = imagecreatefromjpeg($image["tmp_name"]);
            } else {
                $imageFile = imagecreatefrompng($image["tmp_name"]);
            }

            //Gerando o nome da imagem
            $imageName = $movie->generateImageName();

            imagejpeg($imageFile, "./img/movies/" . $imageName, 100);

            $movie->image = $imageName;


        } else {
            $message->setMessage("Tipo inválido de image, insira png ou jpg!", "error", "back");
        }

    }

    $movieDao->create($movie);

    } else {
        $message->setMessage("Você precisa direcionar pelo menos: título, descrição e categoria!", "error", "back");
    }

} else if($type === "delete") {

    // Receber os dados do form
    $id = filter_input(INPUT_POST,"id");

    $movie = $movieDao->findById($id);

    if($movie) {

        //Verificar se o filme é do usuario
        if($movie->users_id === $userData->id) {

            $movieDao->destroy($movie->id);

        } else {

            $message->setMessage("Informações invalidas!", "error", "index.php");
        }

     } else {

        $message->setMessage("Informações inválidas!", "error", "index.php");
     }

        
} else if($type === "update") { 

    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST,"description");
    $trailer = filter_input(INPUT_POST,"trailer");
    $category = filter_input(INPUT_POST,"category");
    $length = filter_input(INPUT_POST,"length");
    $id = filter_input(INPUT_POST,"id");

    $movieData = $movieDao->findById($id);

    // verifica o encontro do filme
    if($movieData) {

        //Verificar se o filme é do usuário
        if($movieData->users_id === $userData->id) {

        
    // Validação minima de dados
    if(!empty($title) && !empty($description) && !empty($category)) {

            //Edição do filme
            $movieData->title = $title;
            $movieData->description = $description;
            $movieData->trailer = $trailer;
            $movieData->category = $category;
            $movieData->length = $length;

            //upload de imagem do filme
            if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_image"])) {

                $image = $_FILES["image"];
                $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
                $jpgArray = ["image/jpeg", "image/jpg"];
    
                // Checando tipo da imagem
            if(in_array($image["type"], $imageTypes)) {
    
                //Checa se imagem é jpg
                if(in_array($image["type"], $jpgArray)) {
                    $imageFile = imagecreatefromjpeg($image["tmp_name"]);
                }else {
                    $imageFile = imagecreatefrompng($image["tmp_name"]);
                }
    
                //Gerando o nome da imagem
                $movie = new Movie();

                $imageName = $movie->generateImageName();
    
                imagejpeg($imageFile, "./img/movies/" . $imageName, 100);
    
                $movie->image = $imageName;

            } else {

                $message->setMessage("Tipo inválido de imagem, insira png ou jpg!", "error", "back");
  
              }

        } 

        $movieDao->update($movieData);


    } else {
            
        $message->setMessage("Você precisa adicionar pelo menos: título, descrição e categoria","error", "back");
        }

    } else {

        $message->setMessage("Informações invalidas!", "error", "index.php");

    }

} else {

    $message->setMessage("Informações invalidas!", "error", "index.php");
    
   
   }

 } else {
    $message->setMessage("Informações inválidas!", "error", "index.php");

 }



