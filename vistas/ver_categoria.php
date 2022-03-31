<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
</head>
<body>
    <?php 
        require('../clases/Categoria.php');
        $categoria = new Categoria(); 
    ?>
    <h1>Actualizar Categoria</h1>
    <form method="POST">
        <?php $categoria->obtenerId(); ?>
        <input type="submit" name="actualizar" value="Actualizar Categoria">
    </form>
    <?php $categoria->actualizar(); ?>
</body>
</html>