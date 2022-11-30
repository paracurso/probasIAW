<?php
$num = (int) $bar;
$num = (   int   ) $bar;  //As dúas sentenzas son equivalentes

//en lugar de forzar unha variable a string, tamén se pode encerrar entre
//comiñas dobres a variable.
$var = 10;             //$foo é un integer
$str = “$var;          //$str é un string
$fst = (string) $foo;  //$fst é tamén un string
//Isto mostra que son o mesmo
if ($fst == $str){
   echo ‘son o mesmo’;
}
?>
