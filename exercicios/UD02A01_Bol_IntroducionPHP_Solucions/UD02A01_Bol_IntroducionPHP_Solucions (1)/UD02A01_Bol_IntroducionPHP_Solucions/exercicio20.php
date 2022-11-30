<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio20</title>
</head>
<body>
    <h1>Exercicio 20</h1>
   <?php
    $valor = 50.5;
    $valorIVA = 50.5 * 0.21;
    $prezo = $valor + $valorIVA;
    echo "O producto ten:";
    echo "
        <ul>
            <li>$valor como prezo base</li>
            <li>$valorIVA como IVA</li>
            <li>$prezo como prezo de venta</li>
        </ul>"
    ?>
</body>
</html>