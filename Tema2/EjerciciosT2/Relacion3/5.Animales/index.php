<?php
    $longitud = rand(20, 30);

    $animales = array(rand(128000, 128060));

    // Relleno la lista hasta $longitud
    for ($i = 1; $i < $longitud; $i++){
        array_push($animales, rand(128000, 128060));
    }

    // Muestro la lista de animales
    echo "$longitud animales: <br>";
    for ($i = 0; $i < $longitud; $i++){
        echo '&#'.$animales[$i];
    }

    echo '<br><br>';

    // Elijo animal a eliminar
    $a_eliminar = rand(128000, 128060);
    echo "Animal a eliminar: &#$a_eliminar";

    // Elimino las apariciones del animal a eliminar
    for ($i = 1; $i < $longitud; $i++){
        if ($animales[$i] == $a_eliminar){
            unset($animales[$i]);
        }
    }

    echo '<br><br>';

    // Muestro la nueva lista
    echo 'Quedan '.count($animales).' animales:<br>';
    for ($i = 0; $i < $longitud; $i++){
        if (isset($animales[$i])){
            echo '&#'.$animales[$i];
        }
    }
?>