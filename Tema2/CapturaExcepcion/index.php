<?php
    try{
        if(isset($_get['id'])){
            echo "<h1>El parámetro es: {$_GET['id']} </h1>";
        }
        else{
            throw new Exception('Faltan parámetros por URL<br>');
        }
    }
    catch (Exception $e){
        echo 'Ha habido un error: '.$e->getMessage();
    }
    finally{
        echo 'Todo correcto';
    }

    function dividir ($a, $b){
        if ($b == 0){
            throw new Exception('El segundo argumento es 0');
        }
        return $a/$b;
    }
    try{
        $resul1 = dividir(5, 0);
        echo 'Resultado 1: '.$resul1.'<br>';
    }
    catch (Exception $e){
        echo 'Excepción: '.$e->getMessage().'<br>';
    }
    finally{
        echo 'Primer finally<br>';
    }

    // Manejar errores con una función propia con set_error_handler()
    function manejadorErrores($errno, $str, $file, $line){
        echo "Ocurrió el error: $errno";
    }
    set_error_handler(manejadorErrores);  // Devuelve el número de error
    $a = $b;  // Error, $b no está iniciado
?>