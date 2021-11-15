<?php
    function esPrimo($num){
        $es_primo = true;

        for ($i = 2; $i < $num; $i++){
            if ($num % $i == 0){
                $es_primo = false;
            }
        }

        return $es_primo;
    }

    $num = $_GET['num'];

    if (esPrimo($num)){
        echo "El número $num es primo";
    }
    else{
        echo "El número $num no es primo";
    }
?>