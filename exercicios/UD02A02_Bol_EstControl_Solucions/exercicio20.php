<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 20</title>
    </head>
    <body>
		<h2>Exercicio 20: Dado un número M e un rango, atopar cantos
		múltiplos de M hai no rango de números enteiros.</h2>
		
        <?php
		/*//Devolve que o rango non é correcto
		$rangoi = -50;
		$rangof = 30;
		*/
		/*//Devolve que o rango non é correcto
		$rangoi = 50;
		$rangof = 30;
		*/
		/*
		$rangoi = 20;
		$rangof = 30;
		*/
		$M = 5;
		$multiplos = 0;
		
		if (($rangoi < $rangof) && ($rangoi >= 0) && ($M > 1)) {
			for ($i = $rangoi; $i <= $rangof; $i++) {
				if ($i % $M == 0) {
					$multiplos++;
				}
			}
			echo "O número de múltiplos de $M entre $rangoi e $rangof son: $multiplos";
		} else {
			echo "O rango indicado non é correcto.";
		}
		?>
	</body>
</html>