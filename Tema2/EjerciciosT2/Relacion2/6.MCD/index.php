<?php
    function MCD($num1, $num2){
        if ($num1 > $num2){
            $aux = $num1;
            $num1 = $num2;
            $num2 = $aux;
        }

        $MCD = 1;

        for ($i = 1; $i <= $num1; $i++){
            if ($num1%$i == 0 & $num2%$i == 0){
                $MCD = $i;
            }
        }

        return $MCD;
    }

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo "El máximo común divisor de $num1 y $num2 es: ".MCD($num1, $num2);
?>