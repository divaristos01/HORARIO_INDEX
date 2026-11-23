<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="../VISTAS/estilo.css">
</head>
<body>
    <header>
        <h1>INICIE SESIÓN</h1>
    </header>
    <main>
        <form action="../PROCESOS/index.php?controlador=CUsuario&metodo=comprobacion" method="POST">
            <div class="cabecera">
                <input type="text" name="usuario" placeholder="usuario">
                <input type="password" name="contra" placeholder="contraseña">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>