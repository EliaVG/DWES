<?php
    $aleatorios = array(rand(1, 100));

    for ($i = 0; $i < 20; $i++){
        array_push($aleatorios, rand(0, 100));
    }

    echo '<table border="1">';
        echo '<tr>';
            for ($i = 0; $i < 20; $i++) {
                echo '<td>'.$aleatorios[$i].'</td>';
            }
        echo '<tr>';
        echo '<tr>';
            for ($i = 0; $i < 20; $i++) {
                echo '<td>'.$aleatorios[$i]*$aleatorios[$i].'</td>';
            }
        echo '<tr>';
        echo '<tr>';
            for ($i = 0; $i < 20; $i++) {
                echo '<td>'.$aleatorios[$i]*$aleatorios[$i]*$aleatorios[$i].'</td>';
            }
        echo '<tr>';
echo '</table>';
?>