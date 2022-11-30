<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 13</title>
    </head>
    <body>
		<h2>Exercicio 13: Dado o número do mes e o ano (catro díxitos) 
		dunha data, determinar en letras que mes é e cantos días ten.</h2>
		
        <?php
		/* //Mostra que o mes non é superior a 0
		$mes = 20;
		$ano = -1994;
		*/
		/* //Mostra que o mes é incorrecto
		$mes = 20;
		$ano = 1994;
		*/
		/* //Mostra que o mes e febreiro e ten 28 días
		$mes = 2;
		$ano = 2017;
		*/
		/* //Mostra que o mes e febreiro e ten 29 días (é bisesto)
		$mes = 2;
		$ano = 2016;
		*/
		/* //Mostra que o mes e febreiro e ten 29 días (é bisesto)
		$mes = 2;
		$ano = 2000;
		*/
		/* //Mostra que o mes e abril e ten 30 días
		$mes = 4;
		$ano = 2016;
		*/

		if (($mes >=1)  && ($mes <= 12)) {
			if ($ano > 0) {
				switch ($mes) {
					case 1:
						$nome = "xaneiro";
						$dias = 31;
						break;
					case 2:
						$nome = "febreiro";
						if ((($ano % 4 == 0) && ($ano % 100 != 0)) || ($ano % 400 == 0)) {
							//é ano bisesto
							$dias = 29; 
						} else {
							//Non é ano bisesto
							$dias = 28;;
						}
						break;
					case 3:
						$nome = "marzo";
						$dias = 31;
						break;
					case 4:
						$nome = "abril";
						$dias = 30;
						break;
					case 5:
						$nome = "maio";
						$dias = 31;
						break;
					case 6:
						$nome = "xuño";
						$dias = 30;
						break;
					case 7:
						$nome = "xullo";
						$dias = 31;
						break;
					case 8:
						$nome = "agosto";
						$dias = 31;
						break;
					case 9:
						$nome = "setembro";
						$dias = 30;
						break;
					case 10:
						$nome = "outubro";
						$dias = 31;
						break;
					case 11;
						$nome = "novembro";
						$dias = 30;
						break;
					case 12:
						$nome = "decembro";
						$dias = 31;
						break;
				}
				echo "O mes é $nome e ten $dias dias";
			} else {
				echo "Non se pode facer o cálculo pois o ano non é superior a 0";
			}
		} else {
			echo "Non se pode facer o cálculo pois o número de mes non está comprendido entre 1 e 12";
		}
		?>
	</body>
</html>