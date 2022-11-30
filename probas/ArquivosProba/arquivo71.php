<?php
//Matriz bidimensional
$mat [0][0] = "1";
$mat [0][1] = "2";
$mat [1][0] = "3";
$mat [1][1] = "4";

echo "<BR> Exemplo con continue <BR>";
//Estrutura de control de nivel 1
foreach ($mat as $var1) {
	echo "foreach 1: $var1<BR>";
	//Estrutura de control de nivel 2
	foreach ($var1 as $var2) {
		if ($var2 == "1") {
			echo "Abandono da iteración pero continúa co seguinte<BR>";
			continue 2;
		}
		echo "foreach 2: $var2<BR>";
	}
}

echo "<BR>Mesmo exemplo pero con break<BR>";
//Estrutura de control de nivel 1
foreach ($mat as $var1) {
	echo "foreach 1: $var1<BR>";
	//Estrutura de control de nivel 2
	foreach ($var1 as $var2) {
		if ($var2 == "1") {
			echo "Abandono dos <BR>";
			break 2;
		}
		echo "foreach 2: $var2<BR>";
	}
}
?>