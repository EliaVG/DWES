<?php
    if (empty($_GET['num1']) or empty($_GET['num2'])){
        echo 'No se encuentran los parámetros num1 y num2';
        return;
    }
    if (($_GET['num2']) < ($_GET['num1'])){
        echo 'El primer parámetro debe ser mayor que el segundo';
        return;
    }
    for ($i = $_GET['num1']; $i <= $_GET['num2']; $i++){
        echo $i.' ';
    }
?>