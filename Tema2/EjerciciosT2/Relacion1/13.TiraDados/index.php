<?php
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);

    echo 'Dado 1: '.$dado1.' - Dado 2: '.$dado2;
    echo '<hr>';

    if ($dado1 == $dado2){
        echo 'Ha salido lo mismo en ambos dados';
    }
    else if ($dado1 < $dado2){
        echo 'Dado 2 es el mayor';
    }
    else{
        echo 'Dado 1 es el mayor';
    }
?>