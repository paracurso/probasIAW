<?php
    $notasPepito = ["eie" => 7, "sr" => 9, "seg" => 3, "so" => 10];
    $suma = 0;
    $i = 0;
    
    //$totalNotas = count($notasPepito);
    
    foreach($notasPepito as $valor) {
        $suma += $valor;
        $i++;
    }

    $media = $suma / $i;

    echo "Media de Pepito: $media";

    foreach($notasPepito as $clave => $valor) {
        echo "A nota de $clave é: $valor.</br>";
    }
?>