<?php
$a1 = [2,3,4,5];
$a2 = [6,3,2,1];



if (count($a1) == count($a2)) {
    foreach ($a1 as $clave => $valor) {
        $rdo[$clave] = $valor + $a2[$clave];
    }
}

print_r($rdo);
?>