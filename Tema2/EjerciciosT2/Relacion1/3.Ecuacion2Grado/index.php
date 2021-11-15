<?php
    function SegundoGrado(){
        $a = 1;
        $b = -5;
        $c = 6;

        $solucion_mas = (-$b+sqrt(($b*$b) - (4*$a*$c)))/(2*$a);
        $solucion_menos = (-$b-sqrt(($b*$b) - (4*$a*$c)))/(2*$a);

        echo $solucion_mas.'<br>'.$solucion_menos;
    }

    SegundoGrado();
?>