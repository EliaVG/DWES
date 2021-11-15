<?php
    echo "<table border = '1'><tr>";
    for ($i = 1; $i < 11; $i++) {
        echo "<th>Tabla del $i</th>";
    }
    for ($i = 1; $i < 11; $i++) {
        echo '<tr>';
        for ($j = 1; $j < 11; $j++) {
            echo "<td style='border: inset 0pt'>$i * $j = $i*$j<br></td>";
        }
        echo '</tr>';
    }
    echo '</tr></table>';
?>