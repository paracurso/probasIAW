<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio25</title>
</head>
<body>
    <h1>Exercicio 25</h1>
   <?php
    $a = 3;
    $b = 54;
    $c = 23;
    $suma = $a + $b + $c;
    echo "O resultado de calcular a expresión (a+b+c)<sup>3</sup> é ".(($suma) ** 3);
    echo "<br> Outra forma de calcular a expresión é coa función pow => ".pow(($a + $b + $c),3);
    ?>
</body>
</html>