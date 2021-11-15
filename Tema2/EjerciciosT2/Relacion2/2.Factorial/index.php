<?php
    function factorial($num){
        $resultado = 1;

        for ($i = 2; $i <= $num; $i++){
            $resultado *= $i;
        }

        return $resultado;
    }

    $num = $_GET['num'];
    echo "El factorial de $num es ".factorial($num);
?>