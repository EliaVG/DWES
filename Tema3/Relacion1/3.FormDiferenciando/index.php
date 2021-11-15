<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['usuario'] === 'usuario' and $_POST['clave'] === '1234') {
            header('Location:bienvenido.html');
        } else {
            $err = true;
        }
    }
?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <?php if(isset($err)){
            echo '<p>Revise usuario y contraseña</p>';
        }
        ?>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <p>
                <label for="usuario">Nombre</label>
                <input type="text" name="usuario" />
            </p>
            <p>
                <label for="clave">Contraseña</label>
                <input type="password" name="clave" />
            </p>
            <input type="submit" name="enviar" />
        </form>
    </body>
</html>