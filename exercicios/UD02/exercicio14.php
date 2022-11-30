<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Exercicio14</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css" title="Color">
</head>

<body>
<?php
    $vbleB = true;
    $vbleE = 4;
    $vbleF = 5.4;
    $vbleC = "Isto é unha cadea";

    echo "A variable \$vleB é escalar = ".is_scalar($vbleB).", é numérica = ".is_numeric($vbleB).", o seu tipo é = ".gettype($vbleB).' <br/>';
    echo "A variable \$vleE é escalar = ".is_scalar($vbleE).", é numérica = ".is_numeric($vbleE).", o seu tipo é = ".gettype($vbleE).' <br/>';
    echo "A variable \$vleB é escalar = ".is_scalar($vbleB).", é numérica = ".is_numeric($vbleF).", o seu tipo é = ".gettype($vbleF).' <br/>';
    echo "A variable \$vleB é escalar = ".is_scalar($vbleB).", é numérica = ".is_numeric($vbleC).", o seu tipo é = ".gettype($vbleC).' <br/>';
    echo "<hr/>";
    settype($vbleB, "string");
    echo "A variable \$vleB é escalar = ".is_scalar($vbleB).", é numérica = ".is_numeric($vbleB).", o seu tipo é = ".gettype($vbleB).", e con valor: $vbleB <br/>";
    unset($vbleB);
    unset($vbleE);
    unset($vbleF);
    unset($vbleC);
?>
</body>
</html>