<?php 
print "<h1>Obtención de turno</h1>\n"; 
$valor = rand(1, 10); 
print "<p>Sacaches a posición $valor.</p>\n";
if (($valor % 2 == 0) && ($valor < 5))  { 
    print "<p>Caso 1 <p>\n"; 
} elseif  (($valor % 2 == 0) && ($valor >= 5)) {
    print "<p>Caso 2<p>\n"; 
} else {
    print "<p>Caso 3<p>\n"; 
} 
?>