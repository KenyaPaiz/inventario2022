<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // require('../clases/registrar_producto.php');
        // $proveedor = new Proveedor();
    ?>
    <form action="" method="POST">
        <h1>Registrar Producto</h1>

        <label for="producto_nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre del producto...">

        <label for="descripcion">Descripción</label>
        <textarea type="text" name="descripcion" placeholder="Descripción..."></textarea>

        <label for="precio">Precio</label>
        <input type="number" name="precio" placeholder="Precio...">

        <label for="categoria">Categoria</label>
        <select name="categoria">
            <option selected>Seleccionar</option>
            <option value="value1">Value 1</option>
            <option value="value2" >Value 2</option>
            <option value="value3">Value 3</option>
        </select>

        <label for="marca">Marca</label>
        <select name="marca">
            <option selected>Seleccionar</option>
            <option value="value1">Value 1</option>
            <option value="value2" >Value 2</option>
            <option value="value3">Value 3</option>
        </select>

        <label for="proveedor">Proveedor</label>
        <select name="proveedor">
            <option selected>Seleccionar</option>
            <option value="value1">Value 1</option>
            <option value="value2" >Value 2</option>
            <option value="value3">Value 3</option>
        </select>

        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" placeholder="Cantidad...">

        <input type="submit" name="registrar" value="Registrar Proveedor">
    </form>
    <?php //$proveedor->registrar(); ?>
    <!--- Tabla de consultas -->
    <br>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Proveedor</th>
            <th>Cantidad</th>
        </thead>
        <tbody>
            <?php // $proveedor->consultar(); ?>
        </tbody>
    </table>
</body>
</html>