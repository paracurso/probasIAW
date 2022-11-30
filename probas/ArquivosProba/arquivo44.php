<?php
$a = array("azul", "branco", "vermello");
$b = array("verde","branco");
$c = $a + $b; //Dá como resultado unha matriz igual a $a
echo "Unión de \$a e \$b: \n";
var_dump($c);

$a = array("azul", "branco","vermello");
$b = array(2=>"verde", "branco");
//Dá como resultado unha matriz igual a $a + o elemento "branco"
//O elemento "verde" non se inclúe porque ten clave 2, que é a clave
//do elemento "vermello"
$c = $a + $b; //da como resultado unha matriz igual a $abs
echo "Unión de \$a e \$b: \n";
var_dump($c);

$a = array("a"=>"mazá","b"=>"plátano");
$b = array("a"=>"pera","b"=>"fresa", "c"=>"cereixa");
$c = $a + $b; 
//Dá como resultado unha matriz igual a $a + o elemento "cereixa" 
echo "Unión de \$a e \$b: \n";
var_dump($c);
?>

