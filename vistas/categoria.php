<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../recursos/css/estilo.categoria.css">
    <title>Categoria</title>
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
            require('../clases/Categoria.php');
            $categoria = new Categoria();
        ?>
        <h1>Registro de Categorias</h1>
        <form action="" method="POST">
            <label for=""><b>Categoria:</b></label>
            <input type="text" name="categoria" placeholder="Categoria">
            <input type="submit" name="registrar" value="Registrar categoria">
        </form>
        <?php $categoria->registrar(); ?>
        <br>
        <table>
            <thead>
                <th>#</th>
                <th>Nombre</th>
                <th>Accion</th>
            </thead>
            <tbody>
                <?php $categoria->consultar(); ?>
            </tbody>
        </table>
    </main>
</body>
</html>