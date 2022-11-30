<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = 234235230;
        $cociente = $numero;
        $rdo = 0;
        $cadea = "";

        while ($cociente != 0) {
            $dixito = $cociente % 10;
            $cociente = floor($cociente / 10);
            $rdo = ($rdo * 10) + $dixito;
        }

        echo "<p>O inverso do número ($numero) é: " . $rdo . "</p>\n";
        
        $cociente = $numero;
        do {
            $dixito = $cociente % 10;
            $cociente = floor($cociente / 10);
            $cadea .= $dixito; //$cadea = $cadea . $dixito
        } while ($cociente != 0);

        echo "<p>O inverso do número ($numero) é: " . $cadea . "</p>\n";
    ?>
</body>
</html>