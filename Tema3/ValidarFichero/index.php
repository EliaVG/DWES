<?php
    $dept = new DOMDocument();
    $dept->load('../EjemploClase/empleados.xml');
    $res = $dept->schemaValidate('../ValidacionEsquemas/departamento.xsd');

    if ($res)
        echo 'El fichero es válido';
    else
        echo 'Fichero no válido';
?>