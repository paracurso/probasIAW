<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title> Exer 09 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php
include "biblioteca.php";
?>

<body>
  <h2>Exercicio 09: Crea un script para que un usuario introduza x notas e se obteña a media das notas, igual que se fixo no exercicio anterior. As nostas mostraranse ordenadas de maior a menor.</h2>

  <?php
    $datos = $_GET;
    $media = notaMedia($datos);
    
    if (!rsort($datos) || (mostrarArray($datos, round($media,2)) == 0)) {
      echo "Aviso: non se puido mostrar o array debido a un erro.";
    }
  ?>
  <p><a href="exercicio09_datos.php">Volver ao formulario.</a></p>

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
