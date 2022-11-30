<?php
$var1 = 4.5;   //asignación básica
$var2 = 5;
// Suma as dúas variables e o resultado asígnase no primeiro
//operando (4.5+5)
$var1 += $var2; //$var1 agora valerá 9.5
echo 'O valor de val1 é: '.$var1;

// Resta as dúas variables e o resultado asígnase no primeiro
//operando (9.5+5)
$var1 -= $var2; //$var1 agora valerá 4.5
echo 'O valor de val1 é: '.$var1;

// Multiplica as dúas variables e o resultado asígnase no primeiro
//operando
$var1 *= $var2; //$var1 agora valerá 22.5
echo 'O valor de val1 é: '.$var1;

// Divide as dúas variables e o resultado asígnase no primeiro
//operando
$var1 /= $var2; //$var1 agora valerá 4.5
echo 'O valor de val1 é: '.$var1;

// Módulo entre as dúas variables e o resultado asígnase no primeiro
//operando
$var1 %= $var2; //$var1 agora valerá 4
echo 'O valor de val1 é: '.$var1;

//Concatena as dúas variables e o resultado asígnase no primeiro
//operando
$var1 .= $var2; //$var1 agora valerá 45 (4 concatenado con 5)
$var1 = 'P';
$var2 = 'hp';
$var1 += $var2; //Dado que é o punto de vista aritmético, a suma é 0
echo 'O valor de val1 é: '.$var1;

$var1 = 'P';
$var2 = 'hp';
$var1 .= $var2;  //Dado que é o punto de vista cadea, concatena ‘Php’
echo 'O valor de val1 é: '.$var1;

?>
