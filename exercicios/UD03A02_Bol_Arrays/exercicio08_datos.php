<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title> Exer 08 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h2>Exercicio 08: Crea un script para que un usuario introduza 10 notas e se obteña a media das notas, igual que se fixo no exercicio anterior.</h2>

  <form action="exercicio08_control.php" method="get">
    <p>Introduza as notas para cada un dos alumnos:</p>
    <?php
      $num = 5;
      for ($i = 0; $i < $num; $i++) {
        echo "<label> Alumno  ".($i+1)."  <input type='number' min='0' max='10' name='Alumno".($i+1)."' required='required'/></label>\n<br/>\n";
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
