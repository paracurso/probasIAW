<?php
function test(){
	$foo="Variable local";
	echo '$foo no ámbito global: '. $GLOBALS['foo'];
	echo '$foo no ámbito actual: '. $foo;
}      
$foo = 'Contido de exemplo';
test();
?>
