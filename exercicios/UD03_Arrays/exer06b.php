<?php
$i = 1;
$suma = 0;
$array = [4,6,7,7,8,8,4,4,3,2];
if (empty($array)) {
    echo "Non hai notas dispoñibles";
} else {
    echo "<table>
        <tr> <td></td><th>Notas</th>";
    foreach($array as $valor) {
        if ($i % 2 != 0) {
            echo "<tr style='background-color: grey'>";
        } else {
            echo "<tr>";
        }        
        echo "<th>Nota " . $i++ . "</th>
                <td>$valor</td>
            </tr>";
        $suma += $valor;
    }

    $media = $suma / count($array);
    echo "<tr>
                <th>TOTAL</th>
                <td>" . round($media,2) . "</td>
            </tr>";
    echo "</table>";
}

?>