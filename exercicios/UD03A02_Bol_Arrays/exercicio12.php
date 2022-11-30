<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 12</title>
    </head>
    <body>
		<h2>Exercicio 12: Crea un array de 6x4 que conteña os múltiplos de 3.</h2>
		<?php
		function encherArray($rows, $cols) {
			//Recorrido para encher o array
			$array = null;
			for ($i = 0; $i < $rows; $i++) {
				for ($j = 0; $j< $cols; $j++) {
					$array[$i][$j] = $i + $j;
				}
			}
			return $array;
		}

		function mostrarArray($array) {

			$rdo = false;
			$i = 1;
			if (is_array($array) ) {
				echo "<table border='1'>
						<caption>Contido da táboa</caption>";
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
			return $rdo;
		}
		
		$elementos = encherArray(3, 5);

		if (!isset($elementos) || !mostrarArray($elementos)) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}

		?>
	</body>
</html>