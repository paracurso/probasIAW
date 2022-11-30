<?php
function xx() {
	if (empty ($var1)) {
		echo "Arquivo: arquivo73b.php -> \$var1 non é visible dentro da función xx<BR>";
	}
	$var2 = "Esta variable definiuse na función";
}

xx();
if (empty($var2)) {
	//Non se espera outra cousa, pero para comprobar que se manteñen
	//todas as regras de ámbito facemos esta comprobación.
	echo "Arquivo: arquivo73b.php -> \$var2 non é visible dentro do código principal<BR>";
}
if (!empty($var1)) {
	//Non se espera outra cousa, pero para comprobar que se manteñen
	//todas as regras de ámbito facemos esta comprobación
	//$var1 foi definida no arquivo que fai a chamada pero segue sendo
	//visible sen necesidade de indicar globals.
	echo "Arquivo: arquivo73b.php -> \$var1 é visible dentro do código principal<BR>";
}
echo "<BR>Arquivo: arquivo73b.php -> No arquivo arquivo73b.php (include) sumarase 1 a \$var1<BR>";
$var1++;
$var3 = 99;
?>