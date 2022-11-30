<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 21</title>
    </head>
    <body>
		<h2>Exercicio 21: Dado un número, determinar se é un número primo.</h2>
		
        <?php
		//$numero = -34; //Devolve que non se pode calcular
		//$numero = 21; //Devolve non é primo
		//$numero = 11; //devolve que é primo
		$divisores = 0;
		
        //O número 1 non se considera primo
        //núm primo é calquera número MAIOR que 1
        //que ten só dous divisores.
		if ($numero >= 1) { 
			for ($i=2; $i < $numero; $i++) {
				if ($numero % $i == 0) {
					$divisores++;
				}
			}
			if (($divisores > 1) || ($numero == 1)) {
				echo "O número $numero non é primo.";
			} else {
				echo "O número $numero é primo.";
			}
		} else {
			echo "Non se pode calcular se é primo, xa que o nº é <= ca 1";
		}
		?>
	</body>
</html>