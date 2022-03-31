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
    <form action="" method="POST">
        <input type="text" name="marca" placeholder="Ingrese el nombre de la marca">
        <input type="submit" name="registrar" value="Registrar Marca">
    </form>
    <?php $marca->registrar(); ?>
    <!--- Tabla de consultas -->
    <br>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Accion</th>
        </thead>
        <tbody>
            <?php $marca->consultar(); ?>
        </tbody>
    </table>
</body>
</html>