<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../recursos/css/estilo.categoria.css">
    <link rel="stylesheet" href="../recursos/css/estilo-nav.css">
    <title>Categoria</title>
</head>
<body>
    <header class="encabezado">
        <nav>

                <div class="div-nav">
                    <a class="nav" href="../menu.php">Menu</a>
                </div>

                <div class="div-nav">
                    <a class="nav" href="categoria.php">Categoria</a>
                </div>

                <div class="div-nav">
                    <a class="nav" href="marca.php">Marca</a>
                </div>

                <div class="div-nav">
                    <a class="nav" href="ver_producto.php">Producto</a>
                </div>

                <div class="div-nav">
                    <a class="nav" href="proveedor.php">Proveedor</a>
                </div>

                <div class="div-nav">
                    <a class="nav" href="registrar_producto.php">Registrar producto</a>
                </div>
            
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