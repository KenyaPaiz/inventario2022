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
        require('../clases/Categoria.php');
        $categoria = new Categoria();
    ?>
    <form action="" method="POST">
        <input type="text" name="categoria" placeholder="Ingrese el nombre de la categoria">
        <input type="submit" name="registrar" value="Registrar categoria">
    </form>
    <?php $categoria->registrar(); ?>
    <br>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Accion</th>
        </thead>
        <tbody>
            <?php $categoria->consultar(); ?>
        </tbody>
    </table>
</body>
</html>