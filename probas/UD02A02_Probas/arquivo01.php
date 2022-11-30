<?php 
print "<h1>Obtención de turno</h1>\n"; 
$valor = rand(1, 10); 
print "<p>Sacaches a posición $valor.</p>\n";
if ($valor == 6) { 
    print "<p>Tocouche o último turno!</p>\n"; 
} 
?>