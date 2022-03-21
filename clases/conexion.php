<?php
    class Conexion{
        public $con;
        
        //funcion para conectar
        public function conectar(){
            $this->con = mysqli_connect("localhost", "root", "", "proyect_tienda");
        }
    }
?>
