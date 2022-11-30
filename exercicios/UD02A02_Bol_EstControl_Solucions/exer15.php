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
        $numeroN = 15;
        $multiplos = 0;
        
        //Alternativa 1
        /*
        $i = 1;

        while($i <= $numeroN) {
            if ($i % 5 == 0) {
                $multiplos++;
            }
            $i++;
        }
        echo "<p>O número de múltiplos ata $numeroN é: $multiplos</p>\n";
        */

        //Alternativa 2
        $i = 0;

        while($i <= $numeroN) {
            $multiplos++;
            $i += 5;
        }
        $multiplos--;
        echo "<p>O número de múltiplos ata $numeroN é: $multiplos</p>\n";
    ?>
</body>
</html>