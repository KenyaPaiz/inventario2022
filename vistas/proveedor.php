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
        <h1>Proveedor</h1>

        <label for="proveedor_nombre">Nombre:</label>
        <input type="text" name="nombre" placeholder="Ingrese el nombre del proveedor">

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" placeholder="Ingrese su dirección">

        <label for="telefono">Teléfono:</label>
        <input type="number" name="telefono" placeholder="Ingrese su teléfono">

        <input type="submit" name="registrar" value="Registrar Proveedor">
    </form>
    <?php $proveedor->registrar(); ?>
    <!--- Tabla de consultas -->
    <br>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
        </thead>
        <tbody>
            <?php $proveedor->consultar(); ?>
        </tbody>
    </table>
</body>
</html>