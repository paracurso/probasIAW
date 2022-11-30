<?php
$a = 8;   //en binario é 1000
$b = 12;  //en binario é 1100

$c = $a & $b;
echo "$c <BR>"; // o resultado é 8 (100)

$c = $a | $b;
echo "$c <BR>"; // o resultado é 12 (1100)

$c = $a ^ $b;
echo "$c <BR>"; // o resultado é 4 (0100)

$c = ~$a;
echo "$c <BR>"; // o resultado é -9 (1111...0111)

$c = $a << 2;   //2 posicións é como multiplicar por 4
echo "$c <BR>"; // o resultado é 32 (100000)

$c = $a >> 2;    //2 posicións é como dividir por 4
echo "$c <BR>"; // o resultado é 2 (0010)
?>

