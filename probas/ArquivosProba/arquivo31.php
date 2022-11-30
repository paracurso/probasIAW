<?php
$var1 = ‘0’;   //$var1 é unha cadea (ASCII 48)
$var1++;      //$var1 é a cadea “1” (ASCII 49) convertido a enteiro (1)
$var1 += 1;   //$var1 agora é un enteiro(2)
$var1 = $var1 +1.3;   //$var1 agora é un doble (3.3)
$varC = ‘2 flores’;
$varC = 5 + $varC; //$varC convértese en enteiro (7)
$varC = ‘flores’;
$varC = 6 + $varC; //$varC convértes en enteiro (6)Como a cadea non 
                   //empeza con números, entón súmase cero.
?>


