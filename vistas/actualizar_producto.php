<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <title>Actualizar Producto</title>
     <link rel="stylesheet" href="../recursos/css/style-act-producto.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <center>
    <div class="container">
        <?php 
            require('../clases/producto.php');
            $producto = new Producto(); 
        ?>
        <h1>Actualizar Producto</h1>
        <form method="POST">
            <?php $producto->obtenerId(); ?>
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
            <input type="submit" name="actualizar" class="btn btn-dark" value="Actualizar Producto">
        </form>
        <?php $producto->actualizar(); ?>
    </div>
</center>
</body>
</html>

