<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <?php 
        require('../clases/producto.php');
        $producto = new Producto(); 
    ?>
    <h1>Actualizar Producto</h1>
    <form method="POST">
        <?php $producto->obtenerId(); ?><br>
        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php $producto->selectCategoria();?>
        </select>

        <label for="marca">Marca</label>
        <select name="marca">
            <?php $producto->selectMarcas(); ?>
        </select>

        <label for="proveedor">Proveedor</label>
        <select name="proveedor">
            <?php $producto->selectProveedor(); ?>
        </select>
        <input type="submit" name="actualizar" value="Actualizar Producto">
    </form>
    <?php $producto->actualizar(); ?>
</body>
</html>

