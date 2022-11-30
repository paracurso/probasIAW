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
        $rangoI = 100;
        $rangoS = 56;
        $cont = 0;
        $numero = $rangoI;

        //Alternativa 1
        /*
        if ($rangoI <= $rangoS) {
            while($numero <= $rangoS) {
                if ($numero % 2 == 0) {
                    $cont++;
                }
                $numero++;
            }
            echo "<p>O número de pares entre $rangoI e $rangoS é: $cont</p>\n";
        } else {
            echo "<p>O rango é incorrecto</p>\n";
        }
        */
        
        //Alternativa 2
        if ($rangoI > $rangoS) {
            $numero = $rangoS;
            $rangoS = $rangoI;
            $rangoI = $numero;
        }
        while($numero <= $rangoS) {
            if ($numero % 2 == 0) {
                $cont++;
            }
            $numero++;
        }
        echo "<p>O número de pares entre $rangoI e $rangoS é: $cont</p>\n";
    ?>
</body>
</html>