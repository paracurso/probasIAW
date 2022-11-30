<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio31</title>
</head>
<body>
    <h1>Exercicio 31</h1>
   <?php
    
    include "Exercicio31_funcions.php";
    
    //Función Suma
    $valor1 = 3;
    $valor2 = 4;
        
    suma($valor1, $valor2);
    
    //Función prezoFinal
    $prezo = 40;
    
    echo "O prezo + IVA de $prezo é ". prezoFinal($prezo)."<br/>";
    
    //Función cociente
    $datos = cociente($valor1, $valor2);
    echo "Dos números $valor1 e $valor2 obtemos a seguinte información: 
    <ul>
        <li>Cociente: $datos[0]</li>
        <li>Resto: $datos[1]</li>
    </ul><br/>";
    
    //Función transformarHora
    $hora = 2;
    $resultado = transformarHora($hora);
    
    echo "O número de minutos de $hora horas son: $resultado[0]; e o  número de segundos son: $resultado[1]<br/>";
    
    
    //Función área e volume
    $radio = 2;
    $altura = 3;
    
    echo "A área do cilindro con radio $radio e altura $altura é: <ul>
        <li>Área: ".area($radio, $altura)."</li>
        <li>Volume: ".volume($radio, $altura)."</li>
    </ul><br/>";
    ?>
</body>
</html>