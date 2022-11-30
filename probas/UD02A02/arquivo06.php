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
        $numero = rand(1,20);
        $texto = "indefinido";

        switch($numero) {
            case 1:
                $texto = "un";
                break;
            case 2:
                $texto = "dous";
                break;
            case 3:
                $texto = "tres";
                break;
            case 4:
                $texto = "catro";
                break;
            case 5:
                $texto = "cinco";
                break;
            case 6:
                $texto = "seis";
                break;
            case 7:
                $texto = "sete";
                break;
            case 8:
                $texto = "oito";
                break;
        }
        echo "<p>O número $numero ten como texto: $texto</p>\n";
    ?>
</body>
</html>