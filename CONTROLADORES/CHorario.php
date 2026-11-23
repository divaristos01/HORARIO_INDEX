<?php
    require_once "../MODELOS/MClases.php";
    require_once "../MODELOS/MAsignaturas.php";
    require_once "../MODELOS/MHorario.php";

    class CHorario{
        public $vista;
        public $nombre;
        public $dias=['lunes', 'martes', 'miercoles', 'jueves', 'viernes'];
        public $guardado;//GUARDO SI SE HA GUARDADO LAS 6 CONSULTAS
        public $clase;//GUARDAMOS EL ID DE LA CLASE
        public $i;//INDICE PARA EL DIA ACTUAL

        public function pedirClaseDia(){
            $objMClase=new Clases();

            $this->vista="../VISTAS/vistaClaseDia.php";
            return $objMClase->mostrarDatos();
        }

        private function conseguirNombre($clase){
            $objMClase=new Clases();

            return $objMClase->conseguirNombre($clase);
        }

        public function pedirAsignaturas(){
            $idClase=$_REQUEST['clase'];//el request mete en un array todo lo que se mande por el metodo post y get
            $objMAsignatura = new Asignaturas();
            $this->clase=$idClase;
            $this->nombre=$this->conseguirNombre($idClase);

            $this->vista = "../VISTAS/vistaHoras.php";
            return $objMAsignatura->mostrarAsignaturasPorClase($idClase);
        }

        public function guardarHorario(){
            $objMHorario=new Horario();

            $this->clase=$_POST['clase'];
            $this->i=$_POST['i'];
            $dia=$_POST['dia'];//GUARDO EL DIA 

            $asignaturas=[];//GUARDO LAS ASIGNATURAS SELECCIONADAS EN ORDEN
            for($hora=1;$hora<=6;$hora++){
                $asignaturas[$hora]=$_POST["asignatura$hora"];
            }

            $this->vista="../VISTAS/mensaje.php";
            $this->guardado=$objMHorario->insertarVarios($this->clase, $dia, $asignaturas);//esto lo uso despues para redirigir a una pagina o a otra

            if($this->guardado){//SEGUN SI SE GUARDA O NO LE PASO UN MENSAJE U OTRO
                return "Horario del día guardado correctamente.";
            }
            return "No se ha guardado nada. " . $objMHorario->error;
        }

    }
?>