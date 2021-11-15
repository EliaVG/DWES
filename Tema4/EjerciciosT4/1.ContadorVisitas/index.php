<?php
    if (!isset($_COOKIE['visitas'])){
        // Estaablecemos la cookie con nombre, valor, y caducidad para dentro de 24h
        setcookie('visitas', 1, time() + 3600 * 24);
        echo 'Bienvenido por primera vez';
    }
    else{
        $visitas = (int) $_COOKIE['visitas'];
        $visitas++;
        setcookie('visitas', $visitas, time() + 3600 * 24);
        echo "Bienvenido por $visitas º vez";
    }
?>