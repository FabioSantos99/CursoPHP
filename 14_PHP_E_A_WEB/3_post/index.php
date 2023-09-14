<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="marca do carro">
        </div>

        <br>

        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>

        <br>

        <div>
            <input type="checkbox" name="opcionais[]" value="Teto Solar"> Teto Solar
         </div>

        <br>

        <div>
            <input type="checkbox" name="opcionais[]" value="Pelicula"> Pelicula
         </div>

         <br>

         <div>
            <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado
         </div>

        <br>


        <div>

        <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>