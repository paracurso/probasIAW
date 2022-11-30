<?php
function encherArray($numElem) 
{
    $array = [];
    for($i = 0; $i < $numElem; $i++) {
        $array[$i] = rand(1,10);
    }
    return $array;
}

function contarAparicions($array, $valor) {
    $cont = 0;
    foreach($array as $num) {
        if ($num == $valor) {
            $cont++;
        }
    }
    return $cont;
}

$array = encherArray(15);
print_r($array);
$valorB = 4;
echo "O número de aparacións de $valorB: " . contarAparicions($array, $valorB);

?>