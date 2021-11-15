<?php
    $nombre = $_REQUEST['nombre'];
    $correo = $_REQUEST['correo'];
    $telf = $_REQUEST['telf'];

    echo '¡Buenos días, '.$nombre.'<br>';
    echo 'Te voy a enviar span a '.$correo.' y te llamaré de madrugada a '.$telf.'<br>';
    echo 'Enviado desde un iPhone';
?>