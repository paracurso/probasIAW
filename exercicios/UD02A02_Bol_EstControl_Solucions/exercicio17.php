<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 17</title>
    </head>
    <body>
		<h2>Exercicio 17: Dado un número devolva o inverso do número.</h2>
		
        <?php
		//$n = -456;
		$n = 153235;
		//$n = 4;
		$inverso = 0;
		$cociente = abs($n);
		
		while ($cociente != 0) {
			$dixito = $cociente % 10;
			$cociente = floor($cociente / 10);
			$inverso = ($inverso * 10) + $dixito;
		}
		if ($n < 0) {
			$inverso *= -1;
		}
		echo "O inverso do número $n é $inverso";
				
		?>
	</body>
</html>