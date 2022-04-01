<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
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
            require('../clases/proveedor.php');
            $proveedor = new Proveedor();
        ?>
        <form action="" method="POST">
            <h2>Registrar Proveedor</h2>
            <label for=""><b>Nombre:</b></label>
            <input type="text" name="nombre" placeholder="Nombre del Proveedor"><br>
            <label for=""><b>Direccion:</b></label>
            <input type="text" name="direccion" placeholder="Direccion del Proveedor"><br>
            <label for=""><b>Telefono:</b></label>
            <input type="text" name="telefono" placeholder="Telefono del Proveedor"><br>
            <input type="submit" name="registrar" value="Registrar proveedor">
        </form>
        <?php $proveedor->registrar(); ?>
        <br>
        <table>
            <thead>
                <th>#</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Accion</th>
            </thead>
            <tbody>
                <?php $proveedor->consultar(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>