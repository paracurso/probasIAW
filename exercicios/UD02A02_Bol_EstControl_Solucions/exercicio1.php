<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 01: devolver o maior de 2 números </title>
    </head>
    <body>
		<h2>Exercicio 01: devolver o maior de 2 números </h2>
		<?php
		$num1 = 7;
		$num2 = 5;

		if ($num1 > $num2) {
			echo "Dados dous números con valores: $num1 e $num2, o maior é o $num1";
		} elseif ($num2 > $num1) {
			echo "Dados dous números con valores: $num1 e $num2, o maior é o $num1";
		} else {
			echo "Dados dous números con valores: $num1 e $num2, os dous son iguais";
		}
		?>
	</body>
</html>