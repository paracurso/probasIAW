<?php
$a = array("mazá","plátano");
$b = array(1=>"plátano", "0"=>"mazá");

var_dump($a == $b); //bool(true) ten as mesmas clave-valor
var_dump($a === $b); //bool(false) pero nunha orde distinta
?>

