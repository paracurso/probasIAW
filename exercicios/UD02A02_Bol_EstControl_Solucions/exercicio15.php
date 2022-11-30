<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio15</title>
</head>
<body>
	<h1>Exercicio 15</h1>
	<?php
		$numero = 35;
		$multiplos = 0;

		for ($i = 1; $i <= $numero; $i++) {
			if ($i % 5 == 0) {
				$multiplos++;
			}
		}

		echo "O número de múltiplos ata o valor $numero é $multiplos";
		
	?>
</body>
</html>