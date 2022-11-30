<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 13</title>
    </head>
    <body>
		<h2>Exercicio 13: Crea un array de 6x4 que conteña os múltiplos de 3.</h2>
		<?php
		function matrizIdentidade($dim) {
			$array = null;
			for ($i = 0; $i < $dim; $i++) {
				for ($j = 0; $j< $dim; $j++) {
					if ($i == $j) {
						$array[$i][$j] = 1;
					} else {
						$array[$i][$j] = 0;
					}
				}
			}
			return $array;
		}

		function matrizDiagonal($dim) {
			$array = null;
			for ($i = 0; $i < $dim; $i++) {
				for ($j = 0; $j< $dim; $j++) {
					if ($i == $j) {
						$array[$i][$j] = rand(1, 9);
					} else {
						$array[$i][$j] = 0;
					}
				}
			}
			return $array;
		}
		

		function matrizTrasposta($matriz) {
			$array = null;
			if (is_array($matriz)){
				foreach($matriz as $clave1 => $valor1) {
					foreach($valor1 as $clave2 => $valor2) {
						$array[$clave2][$clave1] = $valor2;
					}
				}
			}
			return $array;
		}

		function eMatrizSimetrica($matriz) {
			$iguais = true;
			if (is_array($matriz)) {
				$trasposta = matrizTrasposta($matriz);
				//Comprobamos se as dúas matrices teñen o mesmo número de filas
				//neste caso teñen a mesma dimensión
				if (count($matriz) == count($trasposta)) {
					foreach($matriz as $clave1 => $valor1) {
						foreach($valor1 as $clave2 => $valor2) {
							if ($matriz[$clave1][$clave2] != $trasposta[$clave1][$clave2]) {
								$iguais = false;
								break; //No momento de atopar un elemento desigual saímos do bucle xa que non son iguais
							}
						}
					}
				}
			}
			
			return $iguais;
		}

		function eMatrizDiagonal($matriz) {
			$diagonal = true;
			if (is_array($matriz)) {
				foreach($matriz as $clave1 => $valor) {
					foreach($valor as $clave2 => $valor2) {
						if (($clave1 != $clave2) &&
							($matriz[$clave1][$clave2] != 0)) {
							$diagonal = false;
							break; //No momento de atopar un elemento fóra da diagonal distinto de cero saímos do bucle xa que non é diagonal
						}
					}
				}
			}
			return $diagonal;
		}

		function matrizOperacion($matriz1, $matriz2, $operacion) {
			$array = null;
			switch ($operacion) {
				case "sumar":
					if (mismaDim($matriz1, $matriz2)) {
						foreach ($matriz1 as $key => $valor) {
							foreach ($valor as $key2 => $valor2) {
								$array[$key][$key2] = $matriz1[$key][$key2] + $matriz2[$key][$key2];
							}
						}
					}
					break;
				case "restar":
					if (mismaDim($matriz1, $matriz2)) {
						foreach ($matriz1 as $key => $valor) {
							foreach ($valor as $key2 => $valor2) {
								$array[$key][$key2] = $matriz1[$key][$key2] - $matriz2[$key][$key2];
							}
						}
					}
					break;
				case "produtoEscalar":
					if (is_array($matriz1) && ctype_digit((string)$matriz2)) {
						foreach ($matriz1 as $key => $valor) {
							foreach ($valor as $key2 => $valor2) {
								$array[$key][$key2] = $valor2 * $matriz2;
							}
						}
					}
					break;
				case "produto":
					if (count($matriz1[0]) == count($matriz2)) {
						foreach ($matriz1 as $key => $valor) {
							foreach ($valor as $key2 => $valor2) {
								$array[$key][$key2] = 0;
								for ($i = 0; $i < count($matriz2); $i++) {
									$array[$key][$key2] += $matriz1[$key][$i] * $matriz2[$i][$key2]; 
								}
							}
						}
					}
					break;
				default:

			}
			return $array;
		}

		function mismaDim($matriz1, $matriz2) {
			$rdo = true;

			if ((is_array($matriz1) && is_array($matriz2)) && 
				(count($matriz1) == count($matriz2)) &&
				(count($matriz1) > 1)) {
				foreach($matriz1 as $clave1 => $valor) {
					if (count($matriz1[$clave1]) != count($matriz2[$clave1])) {
						$rdo = false;
						break;
					}
				}
			}
			return $rdo;
		}

		function mostrarArray($array) {

			$rdo = false;
			$i = 1;
			if (is_array($array) ) {
				echo "<table border='1'>";
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

		$matriz1 = array(
			array(2,0,1),
			array(3,0,0),
			array(5,1,1)
		);

		$matriz2 = array(
			array(1,0,1),
			array(1,2,1),
			array(1,1,0)
		);

		$matrizSimetrica = array(
			array(2,3,1),
			array(3,0,5),
			array(1,5,1)
		);

		echo "<h2>Matriz identidade</h2>";
		if (mostrarArray(matrizIdentidade(20)) == 0) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}

		echo "<h2>Matriz diagonal</h2>";
		if (mostrarArray(matrizDiagonal(20)) == 0) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}

		echo "<h2>Matriz trasposta</h2>";
		if (mostrarArray(matrizTrasposta($matriz1)) == 0) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}

		echo "<h2>É Matriz simétrica</h2>";
		//if (eMatrizSimetrica($matriz1)) {
		if (eMatrizSimetrica($matrizSimetrica)) {
			echo "A matriz é simétrica.";
		} else {
			echo "A matriz non é simétrica.";
		}

		echo "<h2>É Matriz diagonal</h2>";
		//if (eMatrizDiagonal($matriz1)) {
		if (eMatrizDiagonal(matrizDiagonal(5))) {
			echo "A matriz é diagonal.";
		} else {
			echo "A matriz non é diagonal.";
		}

		echo "<h2>Suma de matrices</h2>";
		if (mostrarArray(matrizOperacion($matriz1, $matriz2, "sumar")) == 0) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}

		echo "<h2>Resta de matrices</h2>";
		if (mostrarArray(matrizOperacion($matriz1, $matriz2, "restar")) == 0) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}

		echo "<h2>Produto escalar</h2>";
		if (mostrarArray(matrizOperacion($matriz1, 2, "produtoEscalar")) == 0) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}

		echo "<h2>Produto de matrices</h2>";
		if (mostrarArray(matrizOperacion($matriz1, $matriz2, "produto")) == 0) {
			echo "Aviso: non se puido mostrar o array debido a un erro.";
		}

		?>
	</body>
</html>