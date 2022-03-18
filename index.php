<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require('clases/Marca.php');
        $marca = new Marca();
    ?>
    <form action="" method="POST">
        <input type="text" name="marca" placeholder="Ingrese el nombre de la marca">
        <input type="submit" name="registrar" value="Registrar Marca">
    </form>
    <?php $marca->registrarMarca(); ?>
    <!--- que hay -->
</body>
</html>