<?php
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
echo "valor de \$a: $a";
// a asociatividade do operador ternario difire de C/C++
$a = true ? 1 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2
echo "valor de \$a: $a";

$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo "valor de \$a: $a";
?>
