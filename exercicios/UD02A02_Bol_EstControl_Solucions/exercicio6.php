<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 06</title>
    </head>
    <body>
		<h2>Exercicio 06: Dados 3 números enteiros, devolver o número maior.</h2>
		<?php
        $a = 0;
        $b = 0;
        $c = 0;
        
        echo "Os valores son $a, $b, $c <br/>";
        if (isset($a, $b, $c)) {
            if (is_integer($a) && is_integer($b) && is_integer($c)) {
                if (($a > $b) && ($a > $c)) {
                    echo "$a é o maior";
                } elseif ($b > $c) {
                    echo "$b é o maior";
                } else {
                    echo "$c é o maior";
                }
            } else {
                echo "Ningunha ou algunha das variables non é un enteiro.";
            }
            
        } else {
            echo "Ningunha ou algunha das variables non está definida.";
        }
        
		?>
	</body>
</html>