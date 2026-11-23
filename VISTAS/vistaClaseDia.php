<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Clase y Día</title>
    <link rel="stylesheet" href="../VISTAS/estilo.css">
</head>
<body>
    <header>
        <div class="usuario-info">
            <p>Hola, <strong><?php echo $_SESSION['usuario']; ?></strong></p>
            <a href="index.php?controlador=CUsuario&metodo=cerrarSesion" class="btn-cerrar">Cerrar sesión</a>
        </div>
        <h1>ALTA DE HORARIOS</h1>
    </header>
    <main>
        <form action="index.php?controlador=CHorario&metodo=pedirAsignaturas" method="POST">
            <div class="cabecera">
                <div class="campo-grupo">
                    <label for="clase">Selecciona una clase:</label>
                    <select name="clase" id="clase" class="corto">
                        <?php
                            while($fila = $datos->fetch_array()){
                                echo "<option value='" . $fila['idClase'] . "'>" . $fila['nombre'] . "</option>";
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

