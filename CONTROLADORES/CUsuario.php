<?php
    require_once "../MODELOS/MUsuarios.php";

    class CUsuario{
        public $vista;

        public function comprobacion(){
            $objMUsu=new Usuario();
            $datos=$objMUsu->validarInicio($_POST['usuario'], $_POST['contra']);

            if($datos>=1){
                $_SESSION['usuario']=$_POST['usuario'];
                header("Location:index.php?controlador=CHorario&metodo=pedirClaseDia");
            }else{
                return $this->vista="../VISTAS/vistaInicioSesion.php";
            }
        }

        public function cerrarSesion(){
            session_destroy();
            header("Location: ../VISTAS/vistaInicioSesion.php");
        }
    }
?>