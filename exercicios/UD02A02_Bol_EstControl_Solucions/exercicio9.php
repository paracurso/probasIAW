<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 09</title>
    </head>
    <body>
		<h2>Exercicio 09: Dada a temperatura obter o clima.</h2>
		<?php
        //$temper = "ola";
        $temper = 0;
        $clima = "descoñecido";
        
        if (is_integer($temper) || is_float($temper)){
            if ($temper < 10) {
                $clima = "Frío";
            } elseif ($temper <= 20){
                $clima = "Nubrado";
            } elseif ($temper <= 30){
                $clima = "Calor";
            } else {
                $clima = "Tropical";
            }
            echo "IF: A temperatura de $temper grados corresponde co clima -> $clima <br/>";
        } else {
            echo "IF: A temperatura non é un valor correcto <br/>";
        }
        
        switch ($temper) {
            //Se non pomos esta primeira condición,o case para cando $temper
                //vale 0 nos devolvería "Nubrado"
            case 0:
            case ($temper < 10):
                $clima = "Frío";
                break;
            case (($temper >= 10) && ($temper <= 20)):
                $clima = "Nubrado";
                break;
            case (($temper >= 21) && ($temper <= 30)):
                $clima = "Calor";
                break;
            case ($temper > 30):
                $clima = "Nubrado";
                break;
        }
        echo "CASE: A temperatura de $temper grados corresponde co clima -> $clima";
        
        
          
		?>
	</body>
</html>