<?php
    function matriculaValida($matricula){
        $numero_valido = true;
        $letras_valido = true;
        $matricula_valida = false;

        for ($i = 0; $i < 4; $i++){
            if(!is_numeric($matricula[$i])){
                $numero_valido = false;
            }
        }

        for ($i = 4; $i < 7; $i++){
            if($matricula[$i] != strtoupper($matricula[$i]) || !is_string($matricula[$i])){
                $letras_valido = false;
            }
        }

        if ($numero_valido & $letras_valido){
            $matricula_valida = true;
        }

        return $matricula_valida;
    }

    $matricula = $_GET['matricula'];

    if(matriculaValida($matricula)){
        echo $matricula.' es válida';
    }
    else{
        echo $matricula.' no es válida';
    }
?>