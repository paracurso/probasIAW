<?php 
print "<h1>Obtención de turno</h1>\n"; 
$valor = rand(1, 10); 
print "<p>Sacaches a posición $valor.</p>\n";
print (($valor % 2 == 0) && ($valor < 5)) ? "<p>Caso 1<p>\n":((($valor % 2 == 0) && ($valor >= 5))  ? "<p>Caso 2<p>\n" : "<p>Caso 3<p>\n");
?>