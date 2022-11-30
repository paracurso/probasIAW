<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 03</title>
    </head>
    <body>
		<h2>Exercicio 03: Crear unha función que conte cantas veces aparece un determinado número no devandito array.</h2>
		<?php

		/**
			Función que crea un array da dimensión pasada
			como parámetro. Os elementos do array serán
			números aleatorios entre 1 e 10.
		**/

		function encherArray($dim) {
			global $array;
			//Recorrido para encher o array
			for ($i = 0; $i < $dim; $i++) {
				
				$array[] = rand(1,10);
			}
		}

		/**
			Función que busca no array global o valor
			que se pasa como parámetro.

			A función devolve 0 se non se atopou o valor
			Devolve -1 se o valor buscado non é correcto
			Devolve un número n indicando o número de veces
			que aparece o valor no array global
		**/
		
		function contarValor($buscado) {
			
			$veces = 0;
			global $array;
			if (($buscado > 0) && ($buscado < 11)) {
				foreach ($array as $clave => $valor) {
					if ($valor == $buscado) { //Escribimos en cada liña 10 números
						$veces++;
					}
				}
			} else {
				$veces = -1;
			}
			return $veces;
		}
		
		$array = null;
		//$valorBuscar = 20;
		$valorBuscar = 5;
		$elementos = 25;
		encherArray($elementos);
		
		if (is_array($array)) {
			//Recorrido do array para visualizar os valores que contén
			echo "Os elementos do array son os seguintes: ";
			foreach ($array as $clave => $valor) {
				if ($clave % 10 == 0) { //Escribimos en cada liña 10 números
					echo "<BR/>";
				}
				echo "$valor ";
			}

			$veces = contarValor($valorBuscar);
			if ($veces >= 0) {
				echo "<BR/>O valor $valorBuscar aparece $veces veces";
			} else {
				echo "<BR/>O valor $valorBuscar non ten un valor entre 1 e 10";
			}
		} else {
			echo "<BR/>Non se pasou un array correcto.";
		}
		
		?>
	</body>
</html>