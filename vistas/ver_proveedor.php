<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Proveedores</title>
</head>
<body>
    <header>
        <nav>
            <a href="categoria.php">Categoria</a>
            <a href="marca.php">Marca</a>
            <a href="ver_producto.php">Producto</a>
            <a href="proveedor.php">Proveedor</a>
            <a href="registrar_producto.php">Registrar producto</a>
        </nav>
    </header>
    <main>
    <?php 
        require('../clases/proveedor.php');
        $proveedor = new Proveedor(); 
    ?>
    <h1>Actualizar Proveedor</h1>

        <?php $proveedor->obtenerId(); ?>
            <div class="input-contenedor">
                <input type="submit" name="actualizar" value="Actualizar Proveedor" class="button">
            </div>
        </form>
    </main>
    <?php $proveedor->actualizar(); ?>
</body>
</html>