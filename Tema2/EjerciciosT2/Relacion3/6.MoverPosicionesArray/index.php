<?php
    // Creo, relleno y muestro el array
    $numeros = array(rand(0, 9));

    for ($i = 1; $i < 15; $i++){
        array_push($numeros, rand(0, 9));
    }

    for ($i = 0; $i < 15; $i++){
        echo $numeros[$i];
    }

    echo '<br>';

    // Muevo una posición cada elemento
    $rotado = array($numeros[14]);

    for ($i = 0; $i < 15; $i++){
        $rotado[$i+1] = $numeros[$i];
    }

    // Muestro el array rotado
    for ($i = 0; $i < 15; $i++){
        echo $rotado[$i];
    }
?>