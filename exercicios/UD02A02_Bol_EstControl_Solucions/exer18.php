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
        $numero = 27;
        $cociente = $numero;
        $rdo = 0;

        //Alternativa 1
        while ($cociente != 0) {
            $dixito = $cociente % 10;
            $cociente = floor($cociente / 10);
            $rdo += $dixito ** 3;
        }

        echo "<p>O cubo de ($numero) é: " . $rdo . "</p>\n";
        if ($rdo == $numero) {
            echo "<p>O número $numero é cubo perfecto</p>\n";
        } else {
            echo "<p>O número $numero NON é cubo perfecto</p>\n";
        }
        

        //Alternativa 2
        $cociente = $numero;
        $rdo = 0;
        do {
            $dixito = $cociente % 10;
            $cociente = floor($cociente / 10);
            $rdo += $dixito ** 3;
        } while ($cociente != 0);

        echo "<p>O cubo de ($numero) é: " . $rdo . "</p>\n";
        if ($rdo == $numero) {
            echo "<p>O número $numero é cubo perfecto</p>\n";
        } else {
            echo "<p>O número $numero NON é cubo perfecto</p>\n";
        }
    ?>
</body>
</html>