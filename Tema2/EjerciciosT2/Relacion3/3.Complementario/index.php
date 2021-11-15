<?php
    $vector = array(rand(0, 1));

    if ($vector[0] == 0){
        $complementario = array(1);
    }
    else{
        $complementario = array(0);
    }

    while (count($vector) <= 10){
        array_push($vector, rand(0, 1));
    }

    for ($i = 0; $i < count($vector); $i++){
        if ($vector[$i] == 0){
            array_push($complementario, 1);
        }
        else{
            array_push($complementario, 0);
        }
    }

    echo 'A: ';
    for ($i = 0; $i < count($vector); $i++){
        echo $vector[$i].' ';
    }
    
    echo '<br>';

    echo 'Complementario: ';
    for ($i = 0; $i < count($complementario); $i++){
        echo $complementario[$i].' ';
    }
?>