<?php
 require('conexion.php');

 class categoria extends Conexion{
     public $id;
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

     public function consultar(){
         $this->conectar();
         $query ="SELECT * FROM consultar";
         $resultado = mysqli_query($this->con,$query);
         while($imprimir=mysqli_query($resultado));
         $tabla="<tr>";
                $tabla .= "<td>".$imprimir['id']."</td>";
                $tabla .= "<td>".$imprimir['nombre']."</td>";
                $tabla .= "<form action='ver_categoria.php' method='POST'>";
                    $tabla .= "<td><button type='submit' name='id' value='".$imprimir['id']."'>Actualizar</button></td>";
                $tabla .= "</form>";
            $tabla .= "</tr>";
            echo $tabla;

     }

     public function obtener(){
        $this->conectar();
        if(isset($_POST['id'])){
            $this->id = $_POST['id'];
            $query = "SELECT * FROM categoria WHERE id=$this->id";
            $resultado = mysqli_query($this->con, $query);
            while($imprimir = mysqli_fetch_array($resultado)){
                $form = "<label>Nombre: </label>";
                $form .= "<input type='hidden' name='id' value='".$imprimir['id']."'>";
                $form .= "<input type='text' name='nombre_categoria' value='".$imprimir['nombre']."'>";
                echo $form;
            }
        }
    }
 }

?>