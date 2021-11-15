<?php
    header('Cache-Control: no-cache, must-revalidate');
    header('Refresh: 10; URL='.$_SERVER['PHP_SELF']);

    echo '<center><h3>Con la función header hemos especificado que esta página no se 
    guarde en la memoria cahé, sino que se llame a sí misma desde la página original 
    cada 10 segundos. Puede comprobarse dejando la página sin actualizar durante 10
    segundos o pulsando sobre actualizar.</h3></center>';

    setlocale(LC_ALL,'spanish');
    $hora = gettimeofday();
    echo strftime('%A, %d de %B de %Y, a las %H:%M:%S', $hora['sec']).'<br><br>
    Se repite la carga de la página.<br>';
    echo strftime('%A, %d de %B de %Y, a las %H:%M:%S', time()).'<br><br>'
?>

<HTML>
    <head><title>Ejercicio 8</title></head>
    <body><center>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Actualizar</a>
    </center></body>
</HTML>
