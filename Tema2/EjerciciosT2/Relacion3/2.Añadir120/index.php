<?php
    $vector = array(1);

    while (count($vector) <= 120){
        array_push($vector, rand(0, 9));
    }

    echo 'Mostrando el vector: <br>';
    for ($i = 0; $i < count($vector); $i++){
        echo $vector[$i].' ';
    }
?>