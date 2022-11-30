<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 06</title>
    </head>
    <body>
		<h2>Exercicio 06: Crea un script en PHP que realice a suma de dous vectores, usando unha función.</h2>
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
		
		/**
			Función que suma dous vectores da mesma dimensión
			A función devolve 0 en caso de que algún parámetro
			non sexa un array ou os arrays non teñan a mesma
			dimensión. En outro caso devolverá un vector coa
			suma dos dous arrays pasados como parámetros.
		**/

		function sumaVectores($vector1, $vector2) {
			
			$vector3 = null;
			$rdo = null;
			
			if (is_array($vector1) && is_array($vector2)) {
				if (count($vector1) == count($vector2)) {
					foreach($vector1 as $clave => $valor) {
						$vector3[] = $vector1[$clave] + $vector2[$clave];
					}
					$rdo = $vector3;
				} else {
					$rdo = 1;
				}	
			} else {
				$rdo = 0;
			}
			return $rdo;		
		}
		
		/*$vector1 = [5,4,6,8,4,3,6,7,8,4,3,55,66];
		$vector2 = [7,8,2,3,5,7];
		*/
		/*$vector1 = [5,4,6,8,4,3];
		$vector2 = [7,8,2,3,5,7];*/
		/*$vector1 = encherArray(5);
		$vector2 = encherArray(5);*/
		$vector1 = null;
		$vector2 = encherArray(7);

		$vector = sumaVectores($vector1, $vector2);
		
		if ($vector == 0) {
			echo "Non se puideron sumar os arrays: Algún deles non é un array.";
		} elseif ($vector == 1) {
			echo "Non se puideron sumar os arrays: Non teñen a mesma dimensión.";
		} else {
			echo "Os elementos do array son os seguintes: ";
			foreach ($vector as $valor) {
				echo "$valor ";
			}
		}

		$var = 3;
		$array = [3,4];
		$var = $array;
		?>
	</body>
</html>