<?php
    require_once '../configdb.php';

    class Usuario extends Conexion{
        public function validarInicio($usuario, $contra){
            $sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contra'";
            $resultado=$this->conexion->query($sql);
            return $resultado->num_rows;
        }
    }
?>