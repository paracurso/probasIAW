<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 12</title>
    </head>
    <body>
		<h2>Exercicio 12: Dado o número de mes, devolver o trimestres do ano que lle corresponda.</h2>
		<?php
        //$mes = 22; //devolve o else
		//$mes = 3; //devolve 1º trimestre
		//$mes = 11; //devolve 4º trimestre
                     
        if (($mes >= 1) && ($mes <= 12)) {
            switch ($mes) {
				case 1:
				case 2:
				case 3:
					echo "O mes con número $mes está no 1º trimestre.";
					break;
				case 4:
				case 5:
				case 6:
					echo "O mes con número $mes está no 2º trimestre.";
					break;
				case 7:
				case 8:
				case 9:
					echo "O mes con número $mes está no 3º trimestre.";
					break;
				case 10:
				case 11:
				case 12:
					echo "O mes con número $mes está no 4º trimestre.";
					break;
			}
        } else {
            echo "O número de mes introducido non é un valor entre 1 e 12";
		}
		?>
	</body>
</html>