<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 03</title>
    </head>
    <body>
		<h2>Exercicio 03: dado un carácter, determinar se é unha vogal</h2>
		<?php
		/*Probar primeiro se establecer o valor de $caracter, ao non estar definida
			mostrará a mensaxe do else
		*/
		//$caracter = ""; //Mostra o else
		//$caracter = "hola"; //Mostra o else
		//$caracter = "b"; //Mostra que non é unha vogal
		$caracter = "Á"; //Mostra que é unha vogal
		//$caracter = "U"; //Mostra que é unha vogal



		if (isset($caracter) && is_string($caracter)) {
			//$caracter = strtolower($caracter); //O convertimos a minúscula
			/*
            if ($caracter == 'a' or $caracter == 'e' or $caracter == 'i' or $caracter == 'o' or $caracter == 'u' or $caracter == 'á' or $caracter == 'é' or $caracter == 'í' or $caracter == 'ó' or $caracter == 'ú') {
               echo "O carácter $caracter é unha vogal"; 
            } else {
                echo "O carácter $caracter NON é unha vogal";
            }*/
            echo "*** $caracter**";
            $patron = "/(^[aeiouAEIOU]$|^[áéíóúÁÉÍÓÚ]{2}$)/";
            $rdo = preg_match($patron, $caracter);
            if ($rdo == 0) {
                echo "O carácter $caracter non é unha vogal";
            } elseif ($rdo == 1) {
                echo "O carácter $caracter é unha vogal";
            } else {
                echo "Ocurriu un erro";
            }
            
           
		} else {
			echo "Non se introduxo un valor ou este non é un carácter";
		}
		?>
	</body>
</html>

 <!--* ALTERNATIVA CON SWITCH
            switch ($caracter) {
				case 'a':
				case 'e':
				case 'i':
				case 'o':
				case 'u': 
					echo "O carácter $caracter é unha vogal";
					break;
				default: 
					echo "O carácter $caracter non é unha vogal";
			}
-->