<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marca</title>
</head>
<body>
    <?php 
        require('../clases/proveedor.php');
        $proveedor = new Proveedor(); 
    ?>
    <h1>Actualizar Proveedor</h1>
    <form method="POST">
        <?php $proveedor->obtenerId(); ?>
        <input type="submit" name="actualizar" value="Actualizar Proveedor">
    </form>
    <?php $proveedor->actualizar(); ?>
</body>
</html>