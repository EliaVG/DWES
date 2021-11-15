<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" />
            </p>
            <p>
                <label for="clave">Contraseña</label>
                <input type="password" name="clave" />
            </p>
            <input type="submit" name="enviar" />
        </form>
    </body>
</html>