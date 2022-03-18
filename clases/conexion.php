<?php
    $servername = "localhost";
    $database = "proyect_tienda";
    $username = "root";
    $password = "";
    // funcion que creo la conexión con la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Condicion que verifica la conexión con la base de datos
    if (!$conn) {
        //header("location:index.php");
    }
?>