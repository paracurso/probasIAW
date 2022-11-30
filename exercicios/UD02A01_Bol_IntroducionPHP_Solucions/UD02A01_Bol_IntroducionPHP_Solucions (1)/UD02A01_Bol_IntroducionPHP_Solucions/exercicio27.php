<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio27</title>
</head>
<body>
    <h1>Exercicio 27</h1>
   <?php
    define ("PI","3.141516");
    $radio=2;
    $altura=5;
    $area = 2 * PI * $radio * ($radio + $altura);
    $volume = PI * ($radio ** 2) * $altura;
    
    echo "O datos do cilindro son :";
    echo"<ul>
            <li>Área: $area</li>
            <li>Volume: $volume</li>
        </ul>";
    ?>
</body>
</html>