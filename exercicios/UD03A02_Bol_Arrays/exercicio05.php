<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 05</title>
    </head>
    <body>
		<h2>Exercicio 05: Crea un script en PHP que realice a suma de dous vectores.</h2>
		<?php

		/**
			Función que crea un array da dimensión pasada
			como parámetro. Os elementos do array serán
			números aleatorios entre 1 e 100.
		**/
		
		function encherArray($dim) {
			//Recorrido para encher o array
			for ($i = 0; $i < $dim; $i++) {
				$array[] = rand(1,100);
			}
			return $array;
		}
		/*$vector1 = [5,4,6,8,4,3,6,7,8,4,3,55,66];
		$vector2 = [7,8,2,3,5,7];
		*/
		/*$vector1 = [5,4,6,8,4,3];
		$vector2 = [7,8,2,3,5,7];*/
		/*$vector1 = encherArray(5);
		$vector2 = encherArray(5);*/
		/*$vector1 = null;
		$vector2 = encherArray(7);*/
		/*$vector1 = 3;
		$vector2 = null;*/
		$vector1 = [];
		$vector2 = encherArray(3);
		$vector3 = null;
		
		if (is_array($vector1) && is_array($vector2)) {
			if (count($vector1) == count($vector2)) {
				foreach($vector1 as $clave => $valor) {
					$vector3[] = $vector1[$clave] + $vector2[$clave];
				}
			}
				
			if (!empty($vector3)) {
				//Recorrido do array para visualizar os valores que contén
				echo "Os elementos do array son os seguintes: ";
				foreach ($vector3 as $valor) {
					echo "$valor ";
				}
			} else {
				echo "Non se puideron sumar os arrays, pois teñen distintas dimensións";
			}
		} else {
			echo "Non se puido realizar a suma, porque non se deu algún array.";
		}
		?>
	</body>
</html>