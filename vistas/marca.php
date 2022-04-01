<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Marca</title>
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
            require('../clases/Marca.php');
            $marca = new Marca();
        ?>
        <h1>Registro de Marcas</h1>
        <form action="" method="POST">
            <label for=""><b>Marca:</b></label>
            <input type="text" name="marca" placeholder="Nombre de la marca">
            <input type="submit" name="registrar" value="Registrar Marca">
        </form>
        <?php $marca->registrar(); ?>
        <!--- Tabla de consultas -->
        <br>
        <table>
            <thead>
                <th>#</th>
                <th>Nombre</th>
                <th>Accion</th>
            </thead>
            <tbody>
                <?php $marca->consultar(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>