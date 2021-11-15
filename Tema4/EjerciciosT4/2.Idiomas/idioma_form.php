<?php
    if(!isset($_COOKIE['idioma']) or $_COOKIE['idioma'] === 'es'){
        $esp_checked = 'checked';
        $en_checked = '';
        echo 'Seleccione idioma<br><br>';
    }
    else{
        $en_checked = 'checked';
        $esp_checked = '';
        echo 'Change languaje<br><br>';
    }
?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Cambiar idioma</title>
    </head>
    <body>
        <form method="POST" action="set_idioma.php">
            <label><input type="radio" <?php echo $esp_checked?> name="idioma" value="es">Español</label>
            <label><input type="radio" <?php echo $en_checked?> name="idioma" value="en">Inglés</label>
            <input type="submit" value="Cambiar idioma">
        </form>
        <hr>
    </body>
</html>

<?php
    if (!isset($_COOKIE['idioma']) or $_COOKIE['idioma'] === 'es')
        echo 'Hola';
    else
        echo 'Hello';
?>