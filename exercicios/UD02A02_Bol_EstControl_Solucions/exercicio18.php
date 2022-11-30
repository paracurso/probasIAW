<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 18</title>
    </head>
    <body>
		<h2>Exercicio 18: crear un algoritmo que indique se un número é un
		cubo perfecto ou non.</h2>
		
        <?php
		$n = -6;
		$calculo = 0;
		
		$cociente = $n;
		while ($cociente > 0) {
			$dixito = $cociente % 10;
			$cociente = $cociente / 10;
			$calculo += pow($dixito,3);
		}
		
		if (($calculo > 0) && ($calculo == $n)) {
			echo "O número $n é un cubo perfecto";
		} elseif ($calculo == 0) {
			echo "Non se puido facer o cálculo pois o número $n non é positivo";
		} else {
			echo "O número $n non é un cubo perfecto";
		}
		
		?>
	</body>
</html>