<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 04</title>
    </head>
    <body>
		<h2>Exercicio 04: determinar se un nº é múltiplo de 3 e 5</h2>
		<?php
		
		//$numero = 7; //Mostra o else
		$numero = 15; //Mostra o if


        if (isset($numero)) {
            if (is_integer($numero)){
                if (($numero % 3 == 0) && ($numero % 5 == 0)) {
                    echo "O número $numero é múltiplo de 3 e 5";

                } else {
                    echo "O número $numero non é múltiplo de 3 e 5";
                }
            } else {
                echo "A variable está definida pero non é un número";
            }
        } else {
            echo "A variable numérica non está definida";
        }
		?>
	</body>
</html>