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

        $numeroI = 1;
        $numeroS = 10;
        $i = $numeroI;
        $cont = 0;
        do {
            echo "<p>O número é $i</p>\n";
            $i++;
            $cont++;
        } while ($i <= $numeroS);
        echo "Entre o número $numeroI e o número $numeroS hai $cont números.";
    ?>
</body>
</html>