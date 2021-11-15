<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_REQUEST['nombre'];
        $correo = $_REQUEST['correo'];
        $telf = $_REQUEST['telf'];

        header('Location:mensajePerturbador.php/?nombre='.$nombre.'&correo='.$correo.'&telf='.$telf);
    }
?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Hola JuanCarlos</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" />
            </p>
            <p>
                <label for="correo">Correo</label>
                <input type="text" name="correo" />
            </p>
            <p>
                <label for="telf">Teléfono</label>
                <input type="number" name="telf" />
            </p>
            <input type="submit" name="enviar" />
        </form>
    </body>
</html>