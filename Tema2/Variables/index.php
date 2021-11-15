<?php
    $mi_primera_variable='hola mundo guardado en una variable';
    echo '<h1>'.$mi_primera_variable.'</h1>';
    $numero = 44;
    $verdadero = true;
    echo $numero.'<br>';
    echo $verdadero;

    // Asignación por copia y por referencia
    $var1 = 100;
    $var2 = &$var1; // Por referencia
    $var3 = $var1; // Por copia
    echo "var2 vale $var2 <br>";
    $var2 = 300;
    echo "var1 ahora vale $var1<br>";
    $var3 = 400;
    echo "por valor no cambiar var1 $var1'";

?>