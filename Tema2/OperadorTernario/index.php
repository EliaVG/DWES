<?php
    $usuario = '';

    $msg = 'Bienvenido: '.($usuario==''?'Invitado':$usuario);
    echo $msg.'<br>';

    $manzanas = 2;
    $naranjas = 1;

    $mayor = ($manzanas > $naranjas)?$manzanas:$naranjas;
    echo 'El precio mayor es: '.$mayor;
?>