<?php
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
// $array agora é array(2, 4, 6, 8)
unset($valor); // rompe a referencia co último elemento
?>