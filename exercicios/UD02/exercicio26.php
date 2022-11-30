<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio26</title>
</head>
<body>
    <h1>Exercicio 26</h1>
   <?php
    define ("LIBRAS","45.3592");
    define("PES", "0.032808");
    $nome = "Eduardo";
    $peso = 176.37;
    $altura = 5.9;
    $pesoK = round($peso * LIBRAS,2);
    $alturaC = round($altura / PES,1);
    $imc = round(($pesoK)/pow($alturaC, 2),2);
    
    echo "O peso é $pesoK kg e a altura é $alturaC cm <br/>";
    echo "O IMC de $nome é ". $imc;
    ?>
</body>
</html>