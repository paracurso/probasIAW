<?php
echo "<B><U>Sentenza if </U></B><BR>";

$var1 = 4;

switch ($var1) {
	case ($var1 < 5):{
		echo "Suspenso";
		}
	case ($var1 >= 5 && $var1 <7):
		echo "Aprobado";
		break;
	case ($var1 >= 7 && $var1 <8.5):
		echo "Notable";
		break;
	case ($var1 >= 8.5 && $var1 <=9.5):
		echo "Sobresaínte";
		break;
	case 10:
		echo "Matrícula de honra";
		break;
}
?>