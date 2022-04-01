<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro de Producto</title>
</head>
<body>
    <header>
        <nav>
            <a href="../menu.php">Menu</a>
            <a href="categoria.php">Categoria</a>
            <a href="marca.php">Marca</a>
            <a href="ver_producto.php">Producto</a>
            <a href="proveedor.php">Proveedor</a>
            <a href="registrar_producto.php">Registrar producto</a>
        </nav>
    </header>
    <div class="container">
        <?php
            require('../clases/producto.php');
            $producto = new Producto();
        ?>
        <form action="" method="POST">
            <h1>Registrar Producto</h1>

            <label for="producto_nombre">Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre del producto..."><br>

            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" placeholder="descripcion"><br>

            <label for="precio">Precio:</label>
            <input type="text" name="precio" placeholder="Precio..."><br>

            <label for="categoria">Categoria:</label>
            <select name="categoria">
                <?php $producto->selectCategoria();?>
            </select><br>

            <label for="marca">Marca:</label>
            <select name="marca">
                <?php $producto->selectMarcas(); ?>
            </select><br>

            <label for="proveedor">Proveedor:</label>
            <select name="proveedor">
                <?php $producto->selectProveedor(); ?>
            </select><br>
            <label for="">Existencias</label>
            <input type="number" name="existencias"><br><br>
            <input type="submit" name="registrar" value="Registrar Producto">
        </form>
        <?php $producto->registrar(); ?>
    </div>
</body>
</html>