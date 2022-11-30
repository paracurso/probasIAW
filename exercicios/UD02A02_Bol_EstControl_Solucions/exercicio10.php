<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 10</title>
    </head>
    <body>
		<h2>Exercicio 10: Tipo de cliente -> dto e recargo.</h2>
		<?php
        $tipoC = "A";
        $pago = "C";
        $importe = 200;
        $cantidade = 0;
        $total = 0;  
        $tipo = "";     
        $erro = 0;
        
        if (is_string($tipoC) && is_string($pago)) {
            $tipoC = strtoupper($tipoC);
            $pago = strtoupper($pago);
             
            if ($tipoC == "X") {
                switch ($pago) {
                    case "C":
                        $cantidade = $importe * 0.15;
                        $total = $importe - $cantidade;
                        $tipo = "desconto";
                        break;
                    case "P":
                        $cantidade = $importe * 0.10;
                        $total = $importe + $cantidade;
                        $tipo = "recargo";
                        break;
                    default:
                        $erro = 1;
                }
            } elseif ($tipoC == "A") {
                switch ($pago) {
                    case "C":
                        $cantidade = $importe * 0.20;
                        $total = $importe - $cantidade;
                        $tipo = "desconto";
                        break;
                    case "P":
                        $cantidade = $importe * 0.05;
                        $total = $importe + $cantidade;
                        $tipo = "recargo";
                        break;
                    default:
                        $erro = 1;
                }
            } else {
                $erro = 1;
            }
            
            if ($erro == 1) {
                echo "O tipo de cliente ou de pago non é correcto";
            } else {
                echo "O cliente ten un $tipo de $cantidade euros, co que o total a pagar é $total";
            }
        } else {
            echo "Hai algún erro na introdución de datos";
        }
          
		?>
	</body>
</html>