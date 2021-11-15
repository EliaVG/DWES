<?php
//    $frase = 'No hay caminos para la paz, la paz es el camino';
//    echo $frase;
//
//    function mifuncion(){
//        global $frase; // Tenemos que llamarla así para que la identifique
//        echo "<h1>$frase</h1>";
//
//        global $year;
//        $year = 2021;
//        echo "Año dentro de la función -> $year";
//    }
//
//    mifuncion();
//
//    global $year;
//    echo "Año fuera de la función -> $year";

    function buenasDias(){
        return 'Hola, buenos días';
    }
    function buenasTardes(){
        return 'Hola, buenas tardes';
    }
    function buenasNoches(){
        return 'Hola, buenas noches';
    }

    $horario = 'Noches';
    $mifuncion = 'buenas'.$horario;
    echo $mifuncion();

    function duplicar(&$num){ // Accedemos a la variable por referencia
        $num = $num * 2; // así modificamos el valor de una variable de fuera
    }
?>