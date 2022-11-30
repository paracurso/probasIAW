<?php
	
	function foo()
	{
		global $color;
		include 'vars.php';
		echo "Unha $fruta $color";
	}
	
	/* vars.php está no ámbito de foo() así que   *
	* $fruta NON está dispoñible por fóra deste   *
	* ámbito. $color SI está porque foi declarado *
	* como global.                                */

	foo();                      // Unhha mazá verde
	echo "Unha $fruta $color";   // Una verde

	?>
