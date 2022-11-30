<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 11</title>
    </head>
    <body>
		<h2>Exercicio 11: Crea un array de 6x4 que conteña os múltiplos de 3.</h2>
		<?php
		function encherArray($rows, $cols) {
			//Recorrido para encher o array
			$valor = 3;
			$array = null;
			for ($i = 0; $i < $rows; $i++) {
				for ($j = 0; $j< $cols; $j++) {
					$array[$i][$j] = $valor;
					$valor += 3;
				}
			}
			return $array;
		}

		function mostrarArray($array) {

			$rdo = false;
			$i = 1;
			if (is_array($array) ) {
				if (isset($array)) {
					if (sizeof(array_column($array,0)) > 0) {
						echo "<table border='1'>
						<caption> Múltiplos de 3</caption>";
						foreach($array as $fila) {
							echo "<tr>";
							foreach ($fila as $clave => $valor) {
								echo "<td> $valor</td>";
							}
							echo "</tr>";
						}	
						echo "</table>";
						$rdo = true;
					}
				}
			}
			return $rdo;
		}
		
		$elementos = encherArray(6, 4);

		if (!mostrarArray($elementos)) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}

		?>
	</body>
</html>