<?php
    /*echo 'Primer for anidado <br>';

    for ($i = 0; $i < 3; $i++){
        for ($j = 0; $j < 3; $j++){
            echo "i: $i j: $j <br>";

            if ($j == 1){
                break; // Solo sale del bucle de dentro == break 1
            }
        }
    }*/
    echo 'Segundo for anidado <br>';

    for ($i = 0; $i < 3; $i++){
        for ($j = 0; $j < 3; $j++){
            echo "i: $i j: $j <br>";

            if ($j == 1){
                break 2; // Sale de ambos bucles
            }
        }
    }

?>