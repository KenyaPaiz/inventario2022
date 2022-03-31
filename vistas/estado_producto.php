<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado</title>
</head>
<body>
    <?php
        require('../clases/producto.php');
        $estado = new Producto();
    ?>
    <div class="container">
        <h3>Estado del producto</h3>
        <form method="POST">
            <?php $estado->obtenerEstado(); ?>
            <label for=""><b>¿Desea cambiar estado?</b></label><br>
            <select name="estado" id="">
                <?php $estado->selectEstado(); ?>
            </select><br><br>
            <input type="submit" name="cambiarEstado" value="Actualizar Estado">
            <a href="ver_producto.php">Regresar</a>
        </form>
        <?php $estado->cambiarEstado(); ?>
    </div>
</body>
</html>