<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="recursos/logo-carrito.png">
    <link rel="stylesheet" href="recursos/style-inicio.css">
    <script src="https://kit.fontawesome.com/36d396a1fc.js" crossorigin="anonymous"></script>
    <title>Seleciona acción a realizar</title>
</head>
<body>
    <main>
        <!--IMPUT CATEGORÍA-->
        <form action="vistas/Categoria.php" method="POST">
            <img class="imagen" src="recursos/logo-carrito.png" alt="Logo TienditaShop" width = "60" height = "60">
            <h1>¿Qué deseas hacer?</h1>
            <div class="input-contenedor">
                <i class="fa-solid fa-layer-group"></i>
                <input type="submit" name="categoria" value="Ver Categoria" class="button">
            </div>
        </form>
        <!--IMPUT MARCA-->
        <form action="vistas/Marca.php" method="POST">
            <div class="input-contenedor">
                <i class="fa-solid fa-splotch"></i>
                <input type="submit" name="marca" value="Ver Marcas" class="button">
            </div>
        </form>
        <!--IMPUT PROVEEDOR-->
        <form action="vistas/proveedor.php" method="POST">
            <div class="input-contenedor">
                <i class="fa-solid fa-address-book"></i>
                <input type="submit" name="proveedor" value="Ver Proveedor" class="button">
            </div>
        </form>
        <!--IMPUT PRODUCTO-->
        <form action="vistas/ver_producto.php" method="POST">
            <div class="input-contenedor">
                <i class="fa-solid fa-address-book"></i>
                <input type="submit" name="producto" value="Ver Productos" class="button">
            </div>
        </form>
    </main>
</body>
</html>
