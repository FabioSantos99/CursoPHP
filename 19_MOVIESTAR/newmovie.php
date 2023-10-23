<?php

require_once('templates/header.php');

// Verifica se usuario esta autenticado
require_once("models/User.php");
require_once("dao/UserDAO.php");

$userModel = new User();

// Verifica o token, se não for o correto redireciona para a home
$auth = new UserDAO($conn, $BASE_URL);

$userData = $auth->verifyToken(true);

?>

<div id="main-container" class="container-fluid">
    <div class="offset-md-4 col-md-4 new-movie-container">
        <h1 class="page-title">Adicionar Filme</h1>
        <p class="page-description">Adicione sua crítica e compartilhe com o mundo!</p>
    <form action="<?= $BASE_URL ?>movie_process.php" id="add-movie-form" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título do seu filme">
        </div>
        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Duração:</label>
            <input type="text" class="form-control" id="length" name="length" placeholder="Digite a duração do filme">
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <select name="categoty" id="category">
                <option value="">Selecione</option>
                <option value="Ação">Ação</option>
                <option value="Drama">Drama</option>
                <option value="Comédia">Comédia</option>
                <option value="Fantasia / Ficção">Fantasia / Ficção</option>
                <option value="Romance">Romance</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Trailer:</label>
            <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Insira o link do trailer">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea type="text" id="description" rows="5" class="form-control" placeholder="Descreva o filme...">
            </textarea>
        </div>
        <input type="submit" class="btn card-btn" value="Adicionar filme">
     </form>
    </div>
</div>
<?php

require_once('templates/footer.php')

?>