<?php
    $notasPepito = [7, 9, 3, 10, 5, 9];
    $suma = 0;
    
    $totalNotas = count($notasPepito);
    
    for($i = 0; $i < $totalNotas; $i++) {
        $suma += $notasPepito[$i];
    }

    $media = $suma / $totalNotas;

    echo "Media de Pepito: $media";
?>