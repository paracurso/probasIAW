<?php
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
// $array agora é array(2, 4, 6, 8)

// sen unset($valor), $valor aínda é unha referencia ao último elemento: $array[3]

foreach ($array as $clave => $valor) {
    // $array[3] actualizarase con cada valor de $array...
    echo "{$clave} => {$valor} ";
    print_r($array);
}
// ...ata que finalmente 0 penúltimo valor se copia ao último valor

// saída:
// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
?>