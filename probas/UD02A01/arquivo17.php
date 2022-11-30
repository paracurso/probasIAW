<?php
$num = 10;
$cadea = "texto";
if (is_numeric($num)) {
    echo 'A variable \$num é numérica.';
} else {
    echo 'A variable \$num non é numérica.';
}
if (is_numeric($cadea)) {
    echo 'A variable \$cadea é numérica.';
} else {
    echo 'A variable \$cadea non é numérica.';
}

print "Tipo da variable \$num: " . gettype($num);
print "Tipo da variable \$cadea: " . gettype($cadea);
?>