<?php
$var1 = 12;
$var2 = '12';
echo "Comparación 1: " . ($var1 == $var2) . "\n</br>\n";  // PHP considera comparación numérica. Rdo: True
echo "Comparación 2: " . ($var1 != $var2) . "\n</br>\n";  // Rdo: False
echo "Comparación 3: " . ($var1 === $var2) . "\n</br>\n"; // Rdo:False

$var3 = '12 gatos';
echo "Comparación 4: " . ($var2 == $var3) . "\n</br>\n";  // PHP considera comparación de cadeas. Rdo: False
echo "Comparación 5: " . ($var2 != $var3) . "\n</br>\n";  // Rdo: True
echo "Comparación 6: " . ($var2 === $var3) . "\n</br>\n"; // Rdo:False

($var2 != $var3) ? ($var2 = 'É certo') : ($var2 = 'É falso');
echo "Comparación 7: " . ($var2) . "\n</br>\n";   //Rdo: É certo
?>

