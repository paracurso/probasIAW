<?php
$var1 = 12;
$var2 = '12 gatos';
echo $var1 == $var2;  // PHP considera comparación numérica. Rdo: True
echo $var1 != $var2;  // Rdo: False
echo $var1 === $var2; // Rdo:False

$var1 = '12';
$var2 = '12 gatos';
echo $var1 == $var2;  // PHP considera comparación de cadeas. Rdo: False
echo $var1 != $var2;  // Rdo: True
echo $var1 === $var2; // Rdo:False

($var1 != $var2) ? ($var1 = 'É certo') : ($var1 = 'É falso');
echo $var1;   //Rdo: É certo
?>

