<?php
$arr = array('un', 'dous', 'tres', 'catro', 'pare', 'cinco');
while (list(, $val) = each($arr)) {
    if ($val == 'pare') {
        break;    /* Tamén se pode escribir 'break 1;' aquí. */
    }
    echo "$val<br />\n";
}

/* Utilizar o argumento opcional. */

$i = 0;
while (++$i) {
    switch ($i) {
    case 5:
        echo "En 5<br />\n";
        break 1;  /* Só sae do switch. */
    case 10:
        echo "En 10; saíndo<br />\n";
        break 2;  /* Sae do switch e do while. */
    default:
        break;
    }
}
?>