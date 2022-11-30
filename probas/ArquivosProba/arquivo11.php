<?php
$foo = 'Ana';                 // Asigna o valor 'Ana' a $foo
$bar = &$foo;                 // Referenciar $foo vía $bar.
$bar = "Meu nome é $bar";     // Modifica $bar...
echo $bar;
echo $foo;                    // $foo tamén se modifica.
?>
