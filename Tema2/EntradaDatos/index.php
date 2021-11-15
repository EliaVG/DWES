<?php
    function saludar($nombre = 'Pedro'){
        echo "Hola $nombre <br>";
    }

    saludar();
    saludar('Andrea');

    //echo "Hola $_GET['nombre']";
?>

// http://localhost/EjerciciosClase/Tema2/EntradaDatos/index.php?nombre=elia