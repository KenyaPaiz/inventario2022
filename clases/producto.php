<?php
    require "conexion.php";
    class Producto extends Conexion{
        public $id;
        public $nombre;
        public $descripcion;
        public $precio;
        public $stockTotal;
        public $idCategoria;
        public $idMarca;
        public $idProveedor;
        public $idEstado;
        public $entrada;
        public $salida;
        public $cantidad;
        //public $img;

        //Para llenar un select con marcas
        public function selectMarcas(){
            $this->conectar();
            $query = "SELECT * FROM marca";
            $resultado = mysqli_query($this->con, $query);
            while($imprimir = mysqli_fetch_array($resultado)){
                $select = "<option value='".$imprimir['id']."'>";
                    $select .= $imprimir['nombre'];
                $select .= "</option>";
                echo $select;
            }
        }

        public function selectCategoria(){
            $this->conectar();
            $query = "SELECT * FROM categoria";
            $resultado = mysqli_query($this->con, $query);
            while($imprimir = mysqli_fetch_array($resultado)){
                $select = "<option value='".$imprimir['id']."'>";
                    $select .= $imprimir['nombre'];
                $select .= "</option>";
                echo $select;
            }
        }

        public function selectProveedor(){
            $this->conectar();
            $query = "SELECT * FROM proveedor";
            $resultado = mysqli_query($this->con, $query);
            while($imprimir = mysqli_fetch_array($resultado)){
                $select = "<option value='".$imprimir['id']."'>";
                    $select .= $imprimir['nombre'];
                $select .= "</option>";
                echo $select;
            }
        }

        public function registrar(){
            $this->conectar();
            if(isset($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['categoria'], $_POST['marca'], $_POST['proveedor'], $_POST['existencias'])){
                $this->nombre = $_POST['nombre'];
                $this->descripcion = $_POST['descripcion'];
                $this->precio = $_POST['precio'];
                $this->idCategoria = $_POST['categoria'];
                $this->idMarca = $_POST['marca'];
                $this->idProveedor = $_POST['proveedor'];
                $this->stockTotal = $_POST['existencias'];
                $this->idEstado = 1;

                if(isset($_POST['registrar'])){
                    $query = "INSERT INTO producto(nombre, descripcion, precio, idcategoria, idmarca, idproveedor, idestado, stockTotal) 
                                VALUES ('$this->nombre', '$this->descripcion','$this->precio',$this->idCategoria,$this->idMarca,$this->idProveedor,$this->idEstado, $this->stockTotal)";
                    $resultado = mysqli_query($this->con,$query);
                    if(!empty($resultado)){
                        
                        header("location:ver_existencias.php");
                    }
                }
            }
        }

        public function consultar(){
            $this->conectar();
            $query = "SELECT p.id, p.nombre, p.descripcion, p.precio, c.nombre AS categoria, m.nombre AS marca, pv.nombre AS proveedor FROM producto AS p INNER JOIN categoria AS c ON p.idcategoria=c.id INNER JOIN marca AS m ON p.idmarca=m.id INNER JOIN proveedor AS pv ON p.idproveedor=pv.id";
            $resultado = mysqli_query($this->con, $query);
            while($imprimir = mysqli_fetch_array($resultado)){
                $tabla = "<tr>";
                    $tabla .= "<td>".$imprimir['id']."</td>";
                    $tabla .= "<td>".$imprimir['nombre']."</td>";
                    $tabla .= "<td>".$imprimir['descripcion']."</td>";
                    $tabla .= "<td> $ ".$imprimir['precio']."</td>";
                    $tabla .= "<td>".$imprimir['categoria']."</td>";
                    $tabla .= "<td>".$imprimir['marca']."</td>";
                    $tabla .= "<td>".$imprimir['proveedor']."</td>";
                    $tabla .= "<form action='ver_proveedor.php' method='POST'>";
                        $tabla .= "<td><button type='submit' name='idproveedor' value='".$imprimir['id']."'>Actualizar</button></td>";
                    $tabla .= "</form>";
                $tabla .= "</tr>";
                echo $tabla;
            } 
        }

        public function obtenerId(){
            //esta es la para conexion de base de datos
            $this->conectar();
            if(isset($_POST['idproveedor'])){
                $this->id = $_POST['idproveedor'];
                $query = "SELECT * FROM producto WHERE id=$this->id";
                $resultado = mysqli_query($this->con, $query);
                while($imprimir = mysqli_fetch_array($resultado)){
                    $form = "<label>Nombre: </label>";
                    $form .= "<input type='hidden' name='id' value='".$imprimir['id']."'>";
                    $form .= "<input type='text' name='nombre' value='".$imprimir['nombre']."'>";
                    $form .= "<input type='text' name='direccion' value='".$imprimir['descripcion']."'>";
                    $form .= "<input type='text' name='telefono' value='".$imprimir['precio']."'>";
                    $form .= "<input type='text' name='telefono' value='".$imprimir['cantidad']."'>";
                    $form .= "<input type='text' name='telefono' value='".$imprimir['categoria']."'>";
                    $form .= "<input type='text' name='telefono' value='".$imprimir['telefono']."'>";
                    $form .= "<input type='text' name='telefono' value='".$imprimir['telefono']."'>";
                    echo $form;
                }
            }
        }

        public function actualizar(){
            $this->conectar();
            if(isset($_POST['id'])){
                if(isset($_POST['actualizar'])){
                    $this->id = $_POST['id'];
                    $this->nombre = $_POST['nombre'];
                    $this->direccion = $_POST['direccion'];
                    $this->telefono = $_POST['telefono'];
                    $query = "UPDATE proveedor SET nombre='$this->nombre', direccion='$this->direccion', telefono='$this->telefono' WHERE id=$this->id";
                    $resultado = mysqli_query($this->con, $query);
                    if(!empty($resultado)){
                        header("location:proveedor.php");
                    }
                    else{
                        echo "Error al actualizar la marca";
                    }
                }
            }
        }

        
       
    }
?>

