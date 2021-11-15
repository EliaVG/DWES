<?php
    if (empty($_GET['num1']) or empty($_GET['num2'])){
        echo 'No se encuentran los parámetros num1 y num2';
        return;
    }
    if (!is_numeric($_GET['num1']) or !is_numeric($_GET['num2'])){
        echo 'num1 y num2 deben ser números';
        return;
    }
    switch ($_GET['operacion']){
        case 's':
            echo 'Suma: '.$_GET['num1'] + $_GET['num2'];
            break;
        case 'r':
            echo 'Resta: '.$_GET['num1'] - $_GET['num2'];
            break;
        case 'm':
            echo 'Multiplicacion: '.$_GET['num1'] * $_GET['num2'];
            break;
        case 'd':
            echo 'Division: '.$_GET['num1'] / $_GET['num2'];
            break;
    }
?>

// http://localhost/EjerciciosClase/Tema2/Calculadora/index.php?num1=1&num2=2&operacion=s