<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 05</title>
    </head>
    <body>
		<h2>Exercicio 05: Determinar se un número enteiro é par ou impar.</h2>
		<?php
		
		//$numero = 7; //Mostra o else
		//$numero = 16; //Mostra o if
        $numero = "asdf";

        if (isset($numero)) {
            if (is_integer($numero)){
                if ($numero % 2 == 0)  {
                    echo "O número $numero é par";

                } else {
                    echo "O número $numero é impar";
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