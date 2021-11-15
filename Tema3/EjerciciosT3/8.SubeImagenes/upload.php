<?php
    $archivo = $_FILES['archivo'];

    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    if ($tipo == "image/jpg" || $tipo == "image/jpeg")

?>