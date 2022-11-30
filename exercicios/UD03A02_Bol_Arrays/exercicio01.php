<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 01</title>
    </head>
    <body>
		<h2>Exercicio 01: Crea unha función en PHP que encha un array 
		con 1000 números aleatorios entre 1 e 10.</h2>
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

		?>
	</body>
</html>