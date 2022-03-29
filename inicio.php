<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="recursos/icono.jpg">
    <link rel="stylesheet" href="recursos/style-inicio.css">
    <script src="https://kit.fontawesome.com/36d396a1fc.js" crossorigin="anonymous"></script>
    <title>Seleciona acción a realizar</title>
</head>

<body>

<center>
   
            
            <form action="vistas/proveedor.php" method="POST">
            <img class="imagen" src="recursos/icono.jpg" alt="Logo TienditaShop" width = "60" height = "60">
            <h1>¿Qué deseas hacer?</h1>
            <input type="submit" value="ver Categoria">
            <i class="fa-solid fa-address-book" class="icono"></i>
            
            </form>

<!--<label for="">Marcas</label>
    <a href="vistas/marca.php">Registrar Marcas</a> --> 

        
</center>



<center>
            <form action="vistas/Marca.php" method="POST">
            <form method="POST">
            <i class="fa-solid fa-badge-check" class="icono"></i>
            <input type="submit" name="marca" value="Ver Marcas">
            </form>
    

        
</center>



<center>
            <form action="vistas/Categoria.php" method="POST">
            <form method="POST">
            <i class="fa-solid fa-list-radio" class="icono"></i>
            <input type="submit" name="categoria" value="Ver Categorias">
            </form>
   

        
</center>


</body>
</html>
