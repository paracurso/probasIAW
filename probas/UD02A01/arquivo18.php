<?php
$var = '5puntos';	//variable de tipo string
echo "Tipo da variable \$var: " . gettype($var) . "\n</br>\n";
settype($var, 'integer');	//$foo é agora 5 (integer) 
echo "Novo valor da variable \$var: $var\n</br>\n";
unset($var);
echo "Valor da variable despois do borrado \$var: $var";
?>