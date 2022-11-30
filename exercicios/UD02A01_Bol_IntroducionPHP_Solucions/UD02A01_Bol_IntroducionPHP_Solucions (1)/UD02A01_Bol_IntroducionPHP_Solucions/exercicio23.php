<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio23</title>
</head>
<body>
    <h1>Exercicio 23</h1>
   <?php
    $votosS = 20;
    $votosN = 5;
    $total = $votosS + $votosN;
    $porcenS = $votosS / $total * 100;
    $porcenN = $votosN / $total * 100;
    echo "Número de votos SI: $votosS";
    echo "<br>";
    echo "Número de votos NON: $votosN";
    echo "<br>";
    echo "%SI = $porcenS% -- %NON = $porcenN%";
    ?>
</body>
</html>