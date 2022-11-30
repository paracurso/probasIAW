<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 07</title>
    </head>
    <body>
		<h2>Exercicio 07: Dado un número, devolver o dobre se o número non é par. En caso contrario,
o triplo.</h2>
		<?php
        //$numero = 1000; //Devolve o triplo
		//$numero = 9; //Devolve o doble
        
        if (isset($a, $b, $c)) {
            if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
                if ($numero % 2 != 0) {
                    echo "O número non é par, polo que o doble de $numero que é: ".$numero*2;
                } else {
                    echo "O número é par, polo que o triplo de $numero que é: ".$numero*3;
                }
            } else {
                echo "Algunha ou todas as variables son distintas dun número";
            }
        } else {
            echo "Ningunha ou todas as variables non están definidas";
        }
		?>
	</body>
</html>