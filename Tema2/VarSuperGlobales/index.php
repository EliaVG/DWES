<?php
    /* Variables de servidor */
    echo "La ip de mi servidor: ".$_SERVER['SERVER_ADDR'].'<br>';
    echo "Nombre del servidor: ".$_SERVER['SERVER_NAME'].'<br>';
    echo "Software del servidor: ".$_SERVER['SERVER_SOFTWARE'].'<br>';
    echo "Protocolo: ".$_SERVER['SERVER_PROTOCOL'].'<br>';
    echo "Metodo de peticion: ".$_SERVER['REQUEST_METHOD'].'<br>';
    echo "Ruta dentro de thdocs: ".$_SERVER['PHP_SELF'].'<br>';
    echo "Mi navegadorr: ".$_SERVER['HTTP_USER_AGENT'].'<br>';
?>