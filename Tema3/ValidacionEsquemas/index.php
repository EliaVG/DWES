<?php
    // Cargamos el fichero a transformar
    $dept = new DOMDocument();
    $dept->load('../EjemploClase/empleados.xml');

    // Cargamos la transformación
    $transformacion = new DOMDocument();
    $transformacion->load(departamento.xsd);

    // Creamos el procesador
    $procesador = new XSLTProcessor();
    // Asociamos el procesador y la transformación
    $procesador->importStylesheet($transformacion);
    // Transformamos
    $transformada = $procesador->transformToXml($dept);
    echo $transformada;
?>