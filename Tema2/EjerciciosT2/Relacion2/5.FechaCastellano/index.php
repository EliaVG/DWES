<?php
    switch (date('m')){
        case 01:
            $mes = 'Enero';
            break;
        case 02:
            $mes = 'Febrero';
            break;
        case 03:
            $mes = 'Marzo';
            break;
        case 04:
            $mes = 'Abril';
            break;
        case 05:
            $mes = 'Mayo';
            break;
        case 06:
            $mes = 'Junio';
            break;
        case 07:
            $mes = 'Julio';
            break;
        case 8:
            $mes = 'Agosto';
            break;
        case 9:
            $mes = 'Septiembre';
            break;
        case 10:
            $mes = 'Octubre';
            break;
        case 11:
            $mes = 'Noviembre';
            break;
        case 12:
            $mes = 'Diciembre';
            break;
    }

    echo "Fecha actual: ".date('d')." del $mes del ".date('Y');
?>