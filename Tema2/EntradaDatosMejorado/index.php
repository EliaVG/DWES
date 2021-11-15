<?php
    if(empty($_GET['nombre'])){
        echo 'Error, falta el parámetro nombre';
    }
    else{
        echo 'Hola '.$_GET['nombre'];
    }

// http://localhost/EjerciciosClase/Tema2/EntradaDatosMejorado/index.php?nombre=elia