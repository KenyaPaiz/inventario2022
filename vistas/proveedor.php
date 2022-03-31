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
        require('../clases/proveedor.php');
        $proveedor = new Proveedor();
    ?>
    <form action="" method="POST">
        <input type="text" name="nombre" placeholder="Nombre del Proveedor">
        <input type="text" name="direccion" placeholder="Direccion del Proveedor">
        <input type="text" name="telefono" placeholder="Telefono del Proveedor">
        <input type="submit" name="registrar" value="Registrar proveedor">
    </form>
    <?php $proveedor->registrar(); ?>
    <br>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Accion</th>
        </thead>
        <tbody>
            <?php $proveedor->consultar(); ?>
        </tbody>
    </table>
</body>
</html>