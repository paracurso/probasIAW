<?php
$var1 = 2;
//opción máis segura
if ($var1 == 2) {
	include "arquivo73b.php";
}

//esta sintaxe podería dar problemas cando hai un include
if ($var1 == 3)
	include "arquivo73b.php";
?>