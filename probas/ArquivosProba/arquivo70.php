<?php
//Matriz bidimensional
$mat [0][0] = "1";
$mat [0][1] = "2";
$mat [1][0] = "3";
$mat [1][1] = "4";

echo "<BR> Exemplo con break 1 <BR>";
//Estrutura de control de nivel 1
foreach ($mat as $var1) {
	echo "foreach 1: $var1<BR>";
	//Estrutura de control de nivel 2
	foreach ($var1 as $var2) {
		if ($var2 == "2")
			break 3; 
		echo "foreach 2: $var2<BR>";
	}
}
?>