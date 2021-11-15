<?php
    $i = 0;
    echo "Primer switch anidado: <br>";

    while ($i < 2){
        switch ($i){
            case 0:
                echo 'Es un 0';
                break; // Con break 2 sale del switch y del bucle
            case 1:
                echo 'Es un 1';
                break;
        }
        $i++;
    }
?>