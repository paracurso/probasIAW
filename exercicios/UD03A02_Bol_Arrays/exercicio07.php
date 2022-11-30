<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 07</title>
    </head>
    <body>
		<h2>Exercicio 07: Crea un script en PHP que calcule a media das notas contidas nun array.</h2>
		<?php

		/**
			Función que crea un array da dimensión pasada
			como parámetro. Os elementos do array serán
			números aleatorios entre 1 e 100.
		**/

		function encherArray($dim) {
			//Recorrido para encher o array
			for ($i = 0; $i < $dim; $i++) {
				$array[] = rand(1,10);
			}
			return $array;
		}

		/**
			Función que calcula a nota media do
			array que se pasa como parámetro.
			A función devolve:
			- 0: se o parámetro non é un array ou
			está baleiro.
			- Un valor distinto de cero, en caso
			contrario.
		**/
		
		function notaMedia($vector) {
			
			$rdo = 0;
			
			if (is_array($vector) && !empty($vector)) {
				
				foreach($vector as $valor) {
					$rdo += $valor;
				}
				$rdo /= count($vector);
			}


			return $rdo;		

		}

		/**
			Función que mostra nunha táboa o
			contido do array que se pasa como
			primeiro parámetro, e ao final
			a media pasada como segundo parámetro.
			A función devolve:
			- 0: en caso de que o primeiro parámetro
			non sexa un array.
			- 1: en caso contrario.
		**/

		function mostrarArray($vector, $media) {

			$rdo = 0;
			$i = 1;
			if (is_array($vector) ) {
				echo "<table border='1'>\n
						<tr>
							<td></td>
							<th> Notas</th>
						</tr>\n";
				foreach($vector as $valor) {
					echo "<tr> 
							<th> Nota $i </th>
							<td> $valor </td>
						  </tr>\n";
					$i++;
				}
				echo "<tr> 
						<th> TOTAL </th>
						<td> $media </td>
					 </tr>\n
					 </table>";
				$rdo = 1;
			}
			return $rdo;
		}
		
		//$vector1 = [5,4,6,8,4,3,6,7,8,4,3,5,6];
		//$vector1 = null;
		//$vector1 = [];
		//$vector1 = array (0,0,0,0,0,0);
		$vector1 = encherArray(7);
		$media = notaMedia($vector1);
		
		if (mostrarArray($vector1, round($media,2)) == 0) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}
		?>
	</body>
</html>