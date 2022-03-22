<?php
 require('conexion.php');

 class categoria extends Conexion{
     public $categoriaid;
     public $nombre;

     public function registrar (){
         $this->conectar();
         if(isset($_POST['categoria'])){
             $this->nombre = $_POST['categoria'];
             if(isset($_POST['registrar'])){
                 $query= "INSERT INTO categoria(nombre) VALUES ('$this->nombre')";
                 $resultado = mysqli_query($this->con,$query);
                 if(!empty($resultado)){
                     echo "Se añadió categoría";
                 } 
             }

         }
     }
 }

?>