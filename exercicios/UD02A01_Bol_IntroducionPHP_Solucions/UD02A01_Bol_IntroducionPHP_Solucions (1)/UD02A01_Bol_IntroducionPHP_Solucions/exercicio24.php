<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio24</title>
</head>
<body>
    <h1>Exercicio 24</h1>
   <?php
    define("CELSIUS1","32");
    define("CELSIUS2","0.55556");
    const KELVIN = 273.15;
    $faren= 73;
    $celsius = ($faren - CELSIUS1) * CELSIUS2;
    $kelvin = $celsius + KELVIN;
    
    echo "$faren grados Farenheit equivalen a $celsius";
    echo "<br>";
    echo "$faren grados Farenheit equivalen a $kelvin";
    ?>
</body>
</html>