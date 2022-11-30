<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 02</title>
    </head>
    <body>
		<h2>Exercicio 02: Mostrar o contido do array do exer 01 de maneira que en cada liña se mostren 10 elementos.</h2>
		<?php

		/**
			Función que crea un array da dimensión pasada
			como parámetro. Os elementos do array serán
			números aleatorios entre 1 e 10.
		**/
		
		function encherArray($dim) {
			//Recorrido para encher o array
			for ($i = 0; $i < $dim; $i++) {
				global $array;
				$array[] = rand(1,10);
			}
		}
		
		$array = null;
		$elementos = 25;
		encherArray($elementos);
		//Recorrido do array para visualizar os valores que contén
		echo "Os elementos do array son os seguintes: <BR/>";
		
		/* ***
		OPCIÓN 1: mostramos de 10 en 10 cun salto de liña.
		Eltos. separados por un espazo
		Antes da primeira liña inclúe un <BR/>,
		xa que $clave vai ser 0 e é m
		Para a última serie (de 10 ou menos eltos)
		non facemos nada
		*** */

		/*foreach ($array as $clave => $valor) {
			//Escribimos en cada liña 10 números
			if (($clave % 10 == 0)) { 
				echo "<BR/>";
			}
			echo "$valor ";
		}*/


		/* ***
		OPCIÓN 2: mostramos de 10 en 10 cun salto de liña
		Eltos. separados por coma
		Para a última serie (de 10 ou menos eltos)
		tamén facemos un salto de liña
		***** */
		
		$cont = 0;
		foreach ($array as $clave => $valor) {
			$cont++;
			if (($cont % 10 == 0) || ($cont == count($array))) { //Escribimos en cada liña 10 números
				echo "$valor</BR>";
			} else {
				echo "$valor, ";
			}
			
		}

		/* ***
		OPCIÓN 3: mostramos de 10 en 10 cun salto de liña
		Eltos. separados por coma
		Para a última serie (de 10 ou menos eltos)
		non engadimos nin <br/> nin ","
		*** */
		
		/*$cont = 1;
		foreach ($array as $valor) {
			//Escribimos en cada liña 10 números
			if ($cont % 10 == 0)  { 
				//Comprobamos se o elto é o último da 
				//serie de 10 eltos.
				echo "$valor<BR/>";
			} if ($cont == count($array)) {
				//Comprobamos que o elto sexa o último
				//para non escribir nin <BR> nin ","
				echo "$valor";
			} else {
				echo "$valor, ";
			}
			$cont++;
		}*/

		?>
	</body>
</html>