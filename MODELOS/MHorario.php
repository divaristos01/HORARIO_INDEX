<?php
    require_once '../configdb.php';

    class Horario extends Conexion{
        public $error="";//PARA GUARDAR EL MENSAJE DE ERROR, SE PUEDE QUITAR
        
        private function insertarHorario($clase, $dia, $hora, $asignatura){
            $sql="INSERT INTO horarios (idAsignatura, idClase, dia, hora) VALUES ('$asignatura', '$clase', '$dia', '$hora')";
            $this->conexion->query($sql);
            return $this->conexion->affected_rows;
        }

        public function insertarVarios($clase, $dia, $asignaturas){
            $this->error="";

            try{
                $this->conexion->begin_transaction();//inicio la transaccion

                for($hora=1;$hora<=6;$hora++){//recorro las seis horas
                    $resultado=$this->insertarHorario($clase, $dia, $hora, $asignaturas[$hora]);
                    if($resultado<=0){//si no se ha insertado la fila lanzo la excepcion
                        throw new Exception("Hora $hora: no se ha podido guardar.");
                    }
                }
                $this->conexion->commit();//solo si se guardan las seis horas
                return true;
            }catch(Exception $e){
                $this->conexion->rollback();
                $this->error=$e->getMessage();//DOY EL ERROR
                return false;
            }
        }
    }
?>