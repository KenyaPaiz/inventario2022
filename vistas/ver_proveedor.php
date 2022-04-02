<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../recursos/css/estilo-registrar-proveedor.css">
    <link rel="stylesheet" href="../recursos/css/estilo-nav.css">
    <title>Document</title>
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
                    <a class="nav" href="ver_proveedor.php">Proveedor</a>
                </div>

                <div class="div-nav">
                    <a class="nav" href="registrar_producto.php">Registrar producto</a>
                </div>
            
        </nav>
    </header>
<center>
    <div class="container">
        <?php
            require('../clases/proveedor.php');
            $proveedor = new Proveedor();
        ?>
        <form action="" method="POST">

            <h2>Registrar Proveedor</h2>

            <div class="form">
                <label for=""><b>Nombre:</b></label>
                <input type="text" class="barras" name="nombre" placeholder="Nombre del Proveedor"><br>
            </div>

            <div class="form">
                <label for=""><b>Direccion:</b></label>
                <input type="text" class="barras" name="direccion" placeholder="Direccion del Proveedor"><br>
            </div>

            <div class="form">
                <label for=""><b>Telefono:</b></label>
                <input type="text" class="barras" name="telefono" placeholder="Telefono del Proveedor"><br>
            </div>

            <div class="btn-div">
                <input type="submit" name="registrar" id="btn-registrar" class="btn btn-dark" value="Registrar proveedor">
            </div>

        </form>
        <?php $proveedor->registrar(); ?>
        <br>
        <div class="tabla-contenedor">
            <table id="tabla" class="table table-sm">
                <thead>
                    <th class="th">#</th>
                    <th class="th">Nombre</th>
                    <th class="th">Direccion</th>
                    <th class="th">Telefono</th>
                    <th class="th">Accion</th>
                </thead>
                <tbody>
                    <?php $proveedor->consultar(); ?>
                </tbody>
            </table>
        </div>
    </div>
</center>
</body>
</html>