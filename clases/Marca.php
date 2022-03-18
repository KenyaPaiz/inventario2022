<?php
class Marca{
    public $id;
    public $nombre;

    function registrarMarca(){
        require('conexion.php');
        if(isset($_POST['marca'])){
            $this->nombre = $_POST['marca'];
            if(isset($_POST['registrar'])){
                $query = "INSERT INTO marca(nombre) VALUES ('$this->nombre')";
                $resultado = mysqli_query($conn,$query);
                if(!empty($resultado)){
                    echo "Se agrego";
                }
            }
        }
    }
}
?>