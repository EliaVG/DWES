<?php
    function potencia($num, $pow=2){
        $potencia = 1;

        for ($i = 0; $i < $pow; $i++){
            $potencia *= $num;
        }

        return $potencia;
    }

    $num = $_GET['num'];
    $pow = $_GET['pow'];

    echo "$num elevado a 2 = ".potencia($num);
    echo '<br>';
    echo "$num elevado a $pow = ".potencia($num, $pow);
?>