<?php
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
echo "valor de \$a: $a";
// a asociatividade do operador ternario difire de C/C++
$a = (true ? 0 : true) ? 1 : 2; // En PHP 8.1 dá erro sen os parénteses
echo "valor de \$a: $a";

$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo "valor de \$a: $a";
?>
