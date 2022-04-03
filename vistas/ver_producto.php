<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../recursos/css/estilo-ver-producto.css">
    <link rel="stylesheet" href="../recursos/css/estilo-nav.css">
    <link rel="stylesheet" href="../recursos/css/ver_producto.css">
    <title>Producto</title>
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
            require "../clases/producto.php";
            $producto = new Producto();
        ?>
<<<<<<< HEAD
        <h1 class="titulo">Listado de productos</h1>
        <!-- <a href="registrar_producto.php">Registrar Producto</a><br> -->
        <form action="" method="post" class="formulario">
            <div class="busqueda">
                <b>Busqueda: </b>
                <input type="text" name="busqueda" class="busqueda">
                <input type="submit" name="buscar" value="Buscar">
                
            </div>
=======
        <h1>Listado de productos</h1>
        <a href="registrar_producto.php">Registrar Producto</a><br>
        <form action="" method="post">
            <b>Busqueda: </b>
            <input type="text" name="busqueda" >
            <input type="submit" id="btn-registrar" class="btn btn-dark" name="buscar" value="Buscar">
>>>>>>> a83219061ab46854de6b99a8ddf615fe26a096bf
        </form>
        <!--- Tabla de consultas -->
        <br>
        <div class="tabla-contenedor">
            <table id="tabla" class="table table-sm">
                <thead>
                    <th class="th">#</th>
                    <th class="th">Nombre</th>
                    <th class="th">Descripción</th>
                    <th class="th">Precio</th>
                    <th class="th">Cantidad</th>
                    <th class="th">Proveedor</th>
                    <th class="th">Marca</th>
                    <th class="th">Categoria</th>
                    <th colspan="2">Acciones</th>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['buscar'])){
                            $producto->busqueda();
                        }
                        else{
                            $producto->consultar();
                        }
                    ?>
                </tbody>
            </table>
            <?php $producto->totalProductos(); ?>
        </div>
    </div>
    </center>
</body>
</html>