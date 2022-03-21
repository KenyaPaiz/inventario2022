<?php
    class Conexion{
        public $con;
        
        public function conexion(){
            $this->con = mysqli_connect("localhost", "root", "", "proyect_tienda");
        }
    }
?>

//hola Push de prueba 2 xd
