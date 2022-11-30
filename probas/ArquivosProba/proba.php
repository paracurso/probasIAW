<?php //Bloque1: Acceso á posición 0 (carácter primeiro) e á posición 12 (carácter nº 13)
$saudo = "Boas, Dona Ana"; 
print "<li>$saudo</li>\n"; 
$saudo[0] = "M"; 
print "<li>$saudo</li>\n"; 
$saudo[12] = "s"; 
print "<li>$saudo</li>\n"; 
?>
<?php //Bloque 2: Acceso a caracteres fóra da cadea
$saudo = "Boas, Dona Ana"; 
print "<li>$saudo</li>\n"; 
$saudo[14] = "s"; 
print "<li>$saudo</li>\n"; 
$saudo[25] = "!"; 
print "<pre>$saudo</pre>\n"; 
?>
<?php //Bloque 3: a cadea baleira almácenase nunha posición dentro da cadea
$saudo = "Boas, Dona Ana"; 
print "<li>$saudo</li>\n"; 
$saudo[-3] = "D"; 
print "<li>$saudo</li>\n"; 
?>
