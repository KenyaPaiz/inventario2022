<?php
 require('conexion.php');

 class categoria extends Conexion{
     public $categoriaid;
     public $nombre;

     public function registrar (){
         $this->conectar();
         if(isset($_POST['categoria'])){
             $this->nombre = $_POST['categoria'];

         }
     }
 }

?>