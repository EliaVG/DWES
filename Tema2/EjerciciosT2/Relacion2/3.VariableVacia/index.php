// Escribir un programa que compruebe si una variable está vacia
//  - Si está vacia rellenarla con una frase en minúscula y mostrarla en mayúscula
//  - Sino mostrar el valor de la variable por pantalla
<?php
    $variable = '';
    $frase = 'estoy vacía';

    if (empty($variable)){
        echo strtoupper($frase);
    }
    else{
        echo $variable;
    }
?>