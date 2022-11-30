<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title> Exer 10 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h2>Exercicio 10: Crea un script que calcule a letra do DNI que especifique o usuario.</h2>

<?php
    include "biblioteca.php";
    
    $arrayDNI = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
    $dni = validaVbleForm("dni");

    if (($dni != "") && preg_match("/[0-9]{8}/", $dni))  {
        $valor = $dni % 23;
        $letra = $arrayDNI[$valor];
        $texto = "DNI Completo: $dni-$letra";
    } else {
        $texto = "Non se pode mostrar a letra, o DNI é incorrecto.";
    }
    echo $texto;
?>
  <p><a href="exercicio10_datos.php">Volver ao formulario.</a></p>

  <footer>
    <hr/>
    <p class="ultmod">
      Última modificación desta páxina:
      <time datetime="2019-11-22">22 de novembro de 2019</time>
    </p>

    <p class="licencia">
      Módulo de <strong>Aplicacións Web</strong> do IES Armando Cotarelo Valledor.
    </p>
  </footer>
</body>
</html>
