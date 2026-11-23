<?php
    require_once '../configdb.php';

    class Asignaturas extends Conexion{
        public function mostrarAsignaturasPorClase($clase){
            $sql="SELECT * FROM asignaturas WHERE idClase='$clase'";
            $resultado=$this->conexion->query($sql);
            return $resultado;
        }
    }
?>

