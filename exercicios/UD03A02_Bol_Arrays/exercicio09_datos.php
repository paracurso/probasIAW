<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title> Exer 09 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h2>Exercicio 09: Crea un script para que un usuario introduza x notas e se obteña a media das notas, igual que se fixo no exercicio anterior. As nostas mostraranse ordenadas de maior a menor.</h2>

  <form action="exercicio09_control.php" method="get">
    <p>Introduza as notas para cada un dos alumnos:</p>
    <?php

      $maxNotas = 6;
      for ($i = 0; $i < $maxNotas; $i++) {
        echo "<label> Alumno  ".($i+1)."  <input type='number' min='0' max='10' name='Alumno".($i+1)."' required='required'/></label><br/>";
      }
    ?>
    </p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

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
