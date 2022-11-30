<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio16</title>
</head>
<body>
    <h1>Exercicio 16</h1>
   <?php
    $variable = 4.645;
    echo "A parte enteira do valor $variable é ".round($variable,0);
    echo "<br>A parte enteira do valor $variable é ".intval($variable);
    echo "<br>A parte enteira do valor $variable é ".(int)$variable;
    ?>
</body>
</html>