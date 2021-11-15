<?php
    if (empty($_GET['num1']) or empty($_GET['num2'])){
        echo 'No se encuentran los parámetros num1 y num2';
        return;
    }
    if (!is_numeric($_GET['num1']) or !is_numeric($_GET['num2'])){
        echo 'num1 y num2 deben ser números';
        return;
    }
    echo $_GET['num1'] + $_GET['num2'];
?>

// http://localhost/EjerciciosClase/Tema2/Suma/index.php?num1=1&num2=2