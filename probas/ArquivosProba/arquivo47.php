<?php
$var1 = 3;
$var2 = 0;

//A seguinte instrución non xera erro 
//aínda que sexa unha división por cero
$houboerro = "Variable baleira: erro na instrución";
$nonhouboerro = "Variable con valor";

@$resultado = $var1 / $var2;
echo (isset($resultado)) ? $houboerro : $nonhouboerro;
?>

