<?php

require_once("templates/header.php");

//verifica se usuário está autenticado
require_once("models/Movie.php");
require_once("dao/MovieDAO.php");


//Pegar o id do filme
$id = filter_input(INPUT_GET, "id");

$movie;

$movieDao = new MovieDAO($conn, $BASE_URL);

if(empty($id)) {
    $message->setMessage("O filme não foi encontrado!", "error", "index.php");

} else {
    $movie = $movieDao->findById($id);

    // Verifica se o filme existe
    if(!$movie) {
        $message->setMessage("O filme não foi encontrado!", "error", "index.php");
    }
}

// Checar se o filme é do usuário
$userOwnsMovie = false;
if(!empty($userData)) {

    if($userData->id === $movie->users_id) {
        $userOwsMovie = true;
    }
}

// Resgatar as reviews do filme
?>
<div id="main-cntainer" class="container-fluid">
    <div class="row">
        <div class="offset-md-1 col-md-6 movie-container">
            <h1 class="page-title"><?= $movie->title ?></h1>
            <p class="movie-details">
                <span>Duração:<?= $movie->length ?></span>
                <span class="pipe"></span>
                <span><?= $movie->length ?></span>
                <span class="pipe"></span>
                <span><i class="fas fa-star"></i></span>
            </p>
            <iframe src="<?= $movie->trailer ?>" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p><?= $movie->description ?></p>
        </div>
        <div class="col-md-4">
            <div class="movie-image-container" style="background-image: url('<?= $movie->image ?>')"></div>
        </div>
    </div>
</div>
<?php

require_once("templates/footer.php");

?>