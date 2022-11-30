<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 19</title>
    </head>
    <body>
		<h2>Exercicio 19: Dado un número N, obter a suma de pares e impares
		dos primeiros N números enteiros positivos.</h2>
		
        <?php
		$n = -6;
		$pares = 0;
		$impares = 0;
		
		if (is_numeric($n) && $n > 0) {
			for ($i = 1; $i <= $n; $i++) {
				if ($i % 2 == 0) {
					$pares += $i; //$pares = $pares + $i
				} else {
					$impares += $i;
				}
			}
			echo "O suma dos pares ata $n é: $pares</br>";
			echo "O suma dos impares ata $n é: $impares</br>";
		} else {
			echo "Non se pode facer a operación pois o valor introducido non é un número ou se o é non é positivo ou > que 0";
		}
		?>
	</body>
</html>