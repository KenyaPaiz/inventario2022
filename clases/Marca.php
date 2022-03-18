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

    function verMarcas(){
        require('conexion.php');
        $query = "SELECT * FROM marca";
        $resultado = mysqli_query($conn, $query);
        while($imprimir = mysqli_fetch_array($resultado)){
            $tabla = "";
            $tabla = "<tr>";
                $tabla .= "<td>".$imprimir['id']."</td>";
                $tabla .= "<td>".$imprimir['nombre']."</td>";
            $tabla .= "</tr>";
            echo $tabla;
        }
        
    }
}
?>