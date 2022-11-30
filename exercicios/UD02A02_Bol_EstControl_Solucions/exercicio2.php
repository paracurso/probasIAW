<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 02</title>
    </head>
    <body>
		<h2>Exercicio 02: determinar se un nº é positivo, negativo ou neutro</h2>
		<?php
		$num1 = "-4";
        
        if (is_numeric($num1)) {
            if ($num1 > 0) {
                echo "O número $num1 é positivo";
            } elseif ($num1 < 0) {
                echo "O número $num1 é negativo";
            } else {
                echo "O número $num1 é neutro";
		  }  
        } else {
            echo "WARNING!! O valor non é un número.";
        }

		
		?>
	</body>
</html>