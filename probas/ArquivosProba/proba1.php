<?php
$a = 8;   //en binario é 100
$b = 12;  //en binario é 110

$c = $a & $b;
echo "$c <BR>"; // o resultado é 8 (100)

$c = $a | $b;
echo "$c <BR>"; // o resultado é 12 (110)

$c = $a ^ $b;
echo "$c <BR>"; // o resultado é 4 (010)

$c = ~$a;
echo "$c <BR>"; // o resultado é -9 (1111...011)

$c = $a << 28;   //2 posicións é como multiplicar por 4
echo "$c <BR>"; // o resultado é 32 (10000)

$c = $a >> 2;    //2 posicións é como dividir por 4
echo "$c <BR>"; // o resultado é 1 (001)
?>
