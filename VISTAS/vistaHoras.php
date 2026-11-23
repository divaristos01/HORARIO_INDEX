<?php
    if(isset($_REQUEST['i'])){
        $i=$_REQUEST['i'];
    }else{
        $i=0;//para ir cambiando al dia siguiente cada vez que envie, tendrá un valor inicial de 0, e irá tomando el valor de la url y lo incrementará
    }

    $lista=[];
    while($fila=$datos->fetch_array()){//guardo las asignaturas en un array y es el que paso
        $lista[]=$fila;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="../VISTAS/estilo.css">
</head>
<body>
    <header>
        <h1>ALTA DE HORARIOS</h1>
    </header>
    <main>
        <form action="index.php?controlador=CHorario&metodo=guardarHorario" method="POST">

            <div class="cabecera">
                <input type="text" disabled class="corto" value="<?php echo $cHorario->nombre;?>">
                <input type="text" disabled class="corto" value="<?php echo $cHorario->dias[$i];?>">
                <input type="hidden" name="i" value="<?php echo $i+1;?>">  <!--campo invisible para el indice de los dias-->
                <input type="hidden" name="clase" value="<?php echo $cHorario->clase;?>"> <!--campo invisible para el id de la clase-->
                <input type="hidden" name="dia" value="<?php echo $cHorario->dias[$i];?>"> <!--campo invisible para el dia-->
            </div>
           <div class="horas">
                <div class="fila">
                    <input type="text" disabled class="num" name="hora1" value="1">
                    <select name="asignatura1">
                        <option value="">ASIGNATURA</option>
                        <?php
                            foreach($lista as $fila){
                                echo "<option value='" . $fila['idAsignatura'] . "'>" . $fila['nombre'] . "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="fila">
                    <input type="text" disabled class="num" name="hora2" value="2">
                    <select name="asignatura2">
                        <option value="">ASIGNATURA</option>
                         <?php
                            foreach($lista as $fila){
                                echo "<option value='" . $fila['idAsignatura'] . "'>" . $fila['nombre'] . "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="fila">
                    <input type="text" disabled class="num" name="hora3" value="3">
                    <select name="asignatura3">
                        <option value="">ASIGNATURA</option>
                         <?php
                            foreach($lista as $fila){
                                echo "<option value='" . $fila['idAsignatura'] . "'>" . $fila['nombre'] . "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="fila">
                    <input type="text" disabled class="num" name="hora4" value="4">
                    <select name="asignatura4">
                        <option value="">ASIGNATURA</option>
                         <?php
                            foreach($lista as $fila){
                                echo "<option value='" . $fila['idAsignatura'] . "'>" . $fila['nombre'] . "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="fila">
                    <input type="text" disabled class="num" name="hora5" value="5">
                    <select name="asignatura5">
                        <option value="">ASIGNATURA</option>
                         <?php
                            foreach($lista as $fila){
                                echo "<option value='" . $fila['idAsignatura'] . "'>" . $fila['nombre'] . "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="fila">
                    <input type="text" disabled class="num" name="hora6" value="6">
                    <select name="asignatura6">
                        <option value="">ASIGNATURA</option>
                         <?php
                            foreach($lista as $fila){
                                echo "<option value='" . $fila['idAsignatura'] . "'>" . $fila['nombre'] . "</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>