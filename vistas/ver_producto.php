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
        require "../clases/producto.php";
        $producto = new Producto();
    ?>
    <!--- Tabla de consultas -->
    <br>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Proveedor</th>
        </thead>
        <tbody>
            <?php $producto->consultar(); ?>
        </tbody>
    </table>
</body>
</html>