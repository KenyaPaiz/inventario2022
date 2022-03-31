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
        
         require('../clases/producto.php');
         $producto = new Producto();
        
    ?>
    <form action="" method="POST">
        <h1>Registrar Producto</h1>

        <label for="producto_nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre del producto..."><br>

        <label for="descripcion">Descripción</label>
        <textarea type="text" name="descripcion" placeholder="Descripción..."></textarea><br>

        <label for="precio">Precio</label>
        <input type="number" name="precio" placeholder="Precio..."><br>

        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php $producto->selectCategoria();?>
        </select><br>

        <label for="marca">Marca</label>
        <select name="marca">
            <?php $producto->selectMarcas(); ?>
        </select><br>

        <label for="proveedor">Proveedor</label>
        <select name="proveedor">
            <?php $producto->selectProveedor(); ?>
        </select><br><br>

        <label for="">Existencias</label>
        <input type="number" name="existencias"><br>

        <!--<label for="">Imagen</label>
        <input type="file" name="imagen" ><br>-->

        <input type="submit" name="registrar" value="Registrar Producto">
    </form>
    <?php $producto->registrar(); ?>
    
</body>
</html>