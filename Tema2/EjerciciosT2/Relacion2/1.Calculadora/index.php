<?php
    function calculadora($num1, $num2, $op){
        switch ($op){
            case 's':
                $resultado = $num1 + $num2;
                break;
            case 'r':
                $resultado = $num1 - $num2;
                break;
            case 'm':
                $resultado = $num1 * $num2;
                break;
            case 'd':
                if ($num2 == 0){
                    echo 'No se puede dividir entre 0!';
                }
                else{
                    $resultado = $num1 / $num2;
                    break;
                }
        }

        return $resultado;
    }

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operador = $_GET['op'];

    echo "$num1 $operador $num2 = ".calculadora($num1, $num2, $operador);
?>