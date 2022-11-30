<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title> Exer 10 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h2>Exercicio 10: Crea un script que calcule a letra do DNI que especifique o usuario.</h2>

  <form action="exercicio10_control.php" method="get">
   
    <p>
      <label>Indique o seu DNI: <input type="text" pattern="[0-9]{8}" placeholder="DNI sen letra" name="dni"</label>
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
