<?php
    class Conexion{
        public $con;
        
        public function conexion(){
            $this->con = mysqli_connect("localhost", "root", "", "proyect_tienda");
        }
    }
?>