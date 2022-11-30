<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 04</title>
    </head>
    <body>
		<h2>Exercicio 04: Crea un array asociativo que almacene cidades e o seu número de habitantes.
		<br/>
		Crea unha función á que se lle pase o devandito array e devolva a cidade con maior número de habitantes.</h2>
		<?php

		/**
			Función que devolve dun array asociativo, a cidade
			coa maior poboación.
			Devolverá cadea baleira en caso de que o parámetro
			non sexa un array ou este estea baleiro.
			En outro caso devolverá unha cadea coa cidade que 
			ten a poboación maior.
		**/

		function maiorPoboacion($array) {
			$poboacionMaior = 0;
			$cidade = "";
			if (is_array($array) && !empty($array)) {
				foreach ($array as $clave => $valor) {
					if ($valor > $poboacionMaior) { 
						$poboacionMaior = $valor;
						$cidade = $clave;
					}
				}
			}
			return $cidade;
		}
		
		//Encher o array
		//$cidades = null;
		//$cidades = 3;
		//$cidades = [];
		/*$cidades["A Coruña"] = 150000;
		$cidades["Lugo"] = 97500;
		$cidades["Ourense"] = 112000;
		$cidades["Pontevedra"] = 96000;
		$cidades["Gijón"] = 84000;
		$cidades["Oviedo"] = 118000;
		$cidades["León"] = 78000;*/
		/*$cidades = array ("Lugo" => 97500, "Ourense" => 112000);*/
		
		$cidade = maiorPoboacion($cidades);
		
		if (!empty($cidade)) {
			echo "A cidade con maior poboación é $cidade";
		} else {
			echo "Non hai cidades a visualizar";
		}
		?>
	</body>
</html>