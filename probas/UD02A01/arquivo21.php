<?php
$var1 = '0';   //$var1 é unha cadea (ASCII 48)
echo "Valor de \$var1: $var1\n</br>\n";
$var1++;      //$var1 é a cadea “1” (ASCII 49) convertido a enteiro (1)
echo "Valor de \$var1: $var1\n</br>\n";
$var1 += 1;   //$var1 agora é un enteiro(2)
echo "Valor de \$var1: $var1\n</br>\n";
$var1 = $var1 + 1.3;   //$var1 agora é un doble (3.3)
echo "Valor de \$var1: $var1\n</br>\n";
$varC = '2 flores';
echo "Valor de \$varC: $varC\n</br>\n";
$varC = 5 + $varC; //$varC convértese en enteiro (7) -- Desde PHP 8 isto dá un aviso
echo "Valor de \$varC: $varC\n</br>\n";
$varC = 'flores';
echo "Valor de \$varC: $varC\n</br>\n";
$varC = 6 + "hhh"; //Antes de PHP 8: $varC convértese en enteiro. Com o a cadea non 
                   //empeza con números, entón súmase cero  (6)
                   //A partir de PHP 8 isto dá un Fatal Error
echo "Valor de \$varC: $varC\n</br>\n";
?>