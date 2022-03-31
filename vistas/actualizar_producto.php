<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
</head>
<body>
    <?php 
        require('../clases/producto.php');
        $producto = new Producto(); 
    ?>
    <h1>Actualizar Producto</h1>
    <form method="POST">
        <?php $producto->obtenerId(); ?>
        <input type="submit" name="actualizar" value="Actualizar Proveedor">
    </form>
    <?php $producto->actualizar(); ?>
</body>
</html>