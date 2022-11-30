<?php
/* Exemplo 1 de foreach: só o valor */

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Valor actual de \$a: $v.\n";
}

/* Exemplo 2 de foreach: valor (coa súa notación de acceso manual impreso con fines ilustrativos) */

$a = array(1, 2, 3, 17);

$i = 0; /* só para efectos ilustrativos */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

/* Exemplo 3 de foreach: clave e valor */

$a = array(
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "diecisiete" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

/* Exemplo 4 de foreach: arrays multidimensionales */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

/* Exemplo 5 de foreach: arrays dinámicos */
foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
?>