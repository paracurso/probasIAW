<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio28</title>
</head>
<body>
    <h1>Exercicio 28</h1>
   <?php
    
    $num = "12312329876";
    $metros = (integer) ($num / 1000);
    $resto = $num % 1000;
    $decim = (integer) ($resto / 100);
    $resto = $resto % 100;
    $centim = (integer) ($resto / 10);
    $milim = $resto % 10;
        
    echo "$num milímetros corresponde a: ";
    echo"<ul>
            <li>Metros: $metros</li>
            <li>Decímetros: $decim</li>
            <li>Centímetros: $centim</li>
            <li>Milímetros: $milim</li>
        </ul>";
    ?>
</body>
</html>