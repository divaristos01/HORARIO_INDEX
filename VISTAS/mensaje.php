<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje</title>
</head>
<body>
    <p><?php echo $datos; ?></p>

     <?php if($cHorario->guardado){//en el caso de que se guarde, pasamos al siguiente dia?>
       <a href="index.php?controlador=CHorario&metodo=pedirAsignaturas&i=<?php echo $cHorario->i;?>&clase=<?php echo $cHorario->clase;?>">Siguiente día</a>        
    <?php }else{?>
        <a href="index.php?controlador=CHorario&metodo=pedirAsignaturas&i=<?php echo $cHorario->i-1;?>&clase=<?php echo $cHorario->clase;?>">Volver</a>    
    <?php }?>
</body>
</html>