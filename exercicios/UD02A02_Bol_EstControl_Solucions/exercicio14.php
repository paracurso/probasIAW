<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio14</title>
</head>
<body>
	<h1>Exercicio 14</h1>
	<?php
		$valor1 = 3;
		$valor2 = 20;
		$pares = 0;
		$inicio = $valor1;
		//Comprobamos que o valor menor do rango xesa $valor1
		if ($valor1 > $valor2) {
			$aux = $valor1;
			$valor1 = $valor2;
			$valor2 = $aux;
		}

		//unha vez que $valor1 sexa o valor mínimo llo asignamos á variable $inicio
		$inicio = $valor1;

		for (; $valor1 <= $valor2; $valor1++) {
			if ($valor1 % 2 == 0) {
				$pares++;
			}
		}

		echo "O número de pares entre o valor $inicio e $valor2 é $pares";
		
	?>
</body>
</html>