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
    $numero = 11;
    $primo = true;
    for ($i = 2; ($i < $numero) && $primo; $i++) {
        if ($numero % $i == 0) {
            $primo = false;
        }
    }

    if ($primo) {
        echo "O número é primo</br>";
    } else {
        echo "O número non é primo</br>";
    }

    $primo = true;
    $i = 2;
    do {
        if ($numero % $i == 0) {
            $primo = false;
        }
        $i++;
    } while ($primo && ($i < $numero));
       
    if ($primo) {
        echo "O número é primo";
    } else {
        echo "O número non é primo";
    }
    
    ?>
</body>
</html>