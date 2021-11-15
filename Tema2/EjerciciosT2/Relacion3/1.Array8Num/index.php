<?php
    $vector = array(1, 3, 5, 7, 9, 2, 4, 6);

    // Recorrer el vector y mostrarlo por pantalla
    echo 'Mostrando el vector: <br>';
    for ($i = 0; $i < count($vector); $i++){
        echo $vector[$i];
    }

    echo '<br>';

    // Ordenar y mostrar el vector
    sort($vector);
    echo 'Mostrando el vector ordenado: <br>';
    for ($i = 0; $i < count($vector); $i++){
        echo $vector[$i];
    }

    echo '<br>';

    // Mostrar su longitud
    echo 'El vector mide '.count($vector);

    // Buscar un elemento dentro del array
    echo 'El elemento 2 está en la posición '.$vector.array_search(2, $vector);

    // Buscar un elemento pasado como parámetro
    $a_buscar = $_GET['num'];
    echo "El elemento $a_buscar está en la posición ".$vector.array_search($a_buscar, $vector);
?>