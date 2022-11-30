<?php 
print "<h1>Obtención de turno</h1>\n"; 
$valor = rand(1, 10); 
print "<p>Sacaches a posición $valor.</p>\n";
if ($valor % 2 == 0)  { 
    print "<p>O número aleatorio é par<p>\n"; 
} else {
    print "<p>O número aleatorio é impar<p>\n"; 
} 
?>