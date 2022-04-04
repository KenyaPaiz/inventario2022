<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marca</title>
</head>
<body>
    <?php 
        require('../clases/Marca.php');
        $marca = new Marca(); 
    ?>
    <h1>Actualizar Marca</h1>
    <form method="POST">
        <?php $marca->obtenerId(); ?>
        <input type="submit" class="btn btn-dark" name="actualizar" value="Actualizar Marca">
    </form>
    <?php $marca->actualizar(); ?>
</body>
</html>