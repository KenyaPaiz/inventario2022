<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../recursos/css/estilo-nav.css">
    
    <title>Proveedores</title>
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
    <main>
    <?php 
        require('../clases/proveedor.php');
        $proveedor = new Proveedor(); 
    ?>
    <h1>Actualizar Proveedor</h1>
        <form method="POST">
            <?php $proveedor->obtenerId(); ?>
            <div class="input-contenedor">
                <input type="submit" name="actualizar" value="Actualizar Proveedor" class="button">
            </div>
        </form>
    </main>
    <?php $proveedor->actualizar(); ?>
</body>
</html>