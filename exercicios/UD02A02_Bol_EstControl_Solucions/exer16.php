<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cociente = 111133555577777999;
    $contDix = 0;
    $contPares = 0;
    $maior = 0;

    while ($cociente != 0) {
        $dixito = $cociente % 10;
        $cociente = intval($cociente / 10);
        echo "Cociente: $cociente**";
        $contDix++;
        if ($dixito % 2 == 0) {
            $contPares++;
        }
        if ($dixito > $maior) {
            $maior = $dixito;
        }
    }

    echo "\t\t<ul>\n 
        \t\t\t<li>Número de díxitos: $contDix</li>\n
        \t\t\t<li>Número de pares: $contPares</li>\n
        \t\t\t<li>Número maior: $maior</li>\n
        \t\t</ul>\n";
    ?>
</body>
</html>