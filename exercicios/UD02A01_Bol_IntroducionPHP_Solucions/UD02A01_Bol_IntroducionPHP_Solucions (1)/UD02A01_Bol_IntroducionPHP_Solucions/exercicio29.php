<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio29</title>
</head>
<body>
    <h1>Exercicio 29</h1>
   <?php
    
    $lado= "5";   
    
    //Opción 1
    echo "Tendo un cadrado cuxo lado é $lado: ";
    echo"<ul>
            <li>Área: ".($lado * $lado)."</li>
            <li>Perímetro: ".($lado * 4)."</li>
        </ul>";

    //Opción 2: usando php abreviado
    $area = ($lado * $lado);
    $perimetro = ($lado * 4);
    ?>

    <ul>
        <li><?= $area ?></li>
        <li><?= $perimetro ?></li>
    </ul>
</body>
</html>