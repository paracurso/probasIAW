<?php
$notas["alum1"] = ["eie"=>6, "dd"=>6, "adsf"=>10];
$notas[1] = [0 => 6, 1 => 10, 2 => 7, 3 => 8];

foreach ($notas as $alumno => $notasA) {
    echo "<p>O alumno " . $alumno . "tes as seguintes notas: </p>";
    echo "<ul>";
    foreach($notasA as $modulo => $nota) {
        echo "<li>$modulo = $nota</li>";
    }
    echo "</ul>";
    echo "</br>";
}

$notas[0] = [6, 6, 10];
$notas[1] = [0 => 6, 1 => 10, 2 => 7, 3 => 8];
for ($i = 0; $i < count($notas); $i++) {
    for ($j = 0; $j < count($notas[$i]); $j++) {
        echo $notas[$i][$j] . " ";
    }
    echo "</br>";
}

?>