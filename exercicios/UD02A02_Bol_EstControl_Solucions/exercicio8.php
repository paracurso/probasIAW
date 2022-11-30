<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 08</title>
    </head>
    <body>
		<h2>Exercicio 08: Obter o desconto e a cantidade a pagar.</h2>
		<?php
        $importe = 1000;
        $desconto = 0;
        
        if ($importe <= 100) {
            $desconto = $importe * 0.10;
        } else {
            $desconto = $importe * 0.20;
        }
        
        $cantidadePagar = ($importe - $desconto);
        $imposto =  $cantidadePagar * 0.19;
        $var = ($cantidadePagar + $imposto);
        echo "Desconto = $desconto; Imposto = $imposto; A Pagar = $var";
          
		?>
	</body>
</html>