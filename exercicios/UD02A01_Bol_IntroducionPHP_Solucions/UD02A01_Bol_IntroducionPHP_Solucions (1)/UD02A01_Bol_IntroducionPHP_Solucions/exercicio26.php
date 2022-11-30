<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio26</title>
</head>
<body>
    <h1>Exercicio 26</h1>
   <?php
    const LIBRAS = 0.453592;
    define("PES", "0.032808");
    $nome = "Eduardo";
    $peso = 202;
    $altura = 5.9;
    $pesoK = round($peso * LIBRAS,2);
    $alturaC = round($altura / PES,1);
    $imc = round(($pesoK) / pow(($alturaC / 100), 2),2);
    
    echo "O peso é $pesoK kg e a altura é $alturaC cm <br/>";
    echo "O IMC de $nome é ". $imc;
    ?>
</body>
</html>