<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Producto</title>
</head>
<body>
    <div class="container">
        <?php 
            require "../clases/producto.php";
            $producto = new Producto();
        ?>
        <h1>Listado de productos</h1>
        <a href="registrar_producto.php">Registrar Producto</a><br>
        <form action="" method="post">
            <b>Busqueda: </b>
            <input type="text" name="busqueda" >
            <input type="submit" name="buscar" value="Buscar">
        </form>
        <!--- Tabla de consultas -->
        <br>
        <table>
            <thead>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th colspan="2">Acciones</th>
            </thead>
            <tbody>
                <?php $producto->consultar(); ?>
            </tbody>
        </table>
        <?php $producto->totalProductos(); ?>
    </div>
</body>
</html>