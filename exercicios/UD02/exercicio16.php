<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio16</title>
</head>
<body>
    <h1>Exercicio 16</h1>
   <?php
    $variable = 4.345;
    $cambio = (int)$variable;
    echo "A parte enteira do valor $variable é ".round($variable,2,PHP_ROUND_HALF_DOWN);
    echo "<br>A parte enteira do valor $variable é ".intval($variable);
    echo "<br>A parte enteira do valor $variable é ".$cambio;
    ?>
</body>
</html>