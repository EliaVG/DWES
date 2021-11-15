<?php
    $num = 00;

    echo '<table border="1">';
    echo '<tr>
        <th>Decimal</th>
        <th>Binario</th>
        <th>Octal</th>
        <th>Hexadecimal</th></tr>';

    for ($num; $num < 21; $num++){
        echo "<tr><td>$num</td>";
        echo "<td>".base_convert($num, 10, 2)."</td>";
        echo "<td>".base_convert($num, 10, 8)."</td>";
        echo "<td>".base_convert($num, 10, 16)."</td>";
    }
    echo '</table>';
?>