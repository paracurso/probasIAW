<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 11</title>
    </head>
    <body>
		<h2>Exercicio 11: Tipo de cliente -> dto e recargo.</h2>
		<?php
        $numero = 9;
        
        if (is_integer($numero) && (($numero >= 0) && ($numero <= 9))){
            switch($numero) {
                case 0: 
                    echo "cero";
                    break;
                case 1: 
                    echo "un";
                    break;
                case 2: 
                    echo "dous";
                    break;
                case 3: 
                    echo "tres";
                    break;
                case 4: 
                    echo "catro";
                    break;
                case 5: 
                    echo "cinco";
                    break;
                case 6: 
                    echo "seis";
                    break;
                case 7: 
                    echo "sete";
                    break;
                case 8: 
                    echo "oito";
                    break;
                case 9: 
                    echo "nove";
                    break;
            }
        } else {
            echo "O valor indicado non é un nº entre 0 e 9";
        }
          
		?>
	</body>
</html>