<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Exercicio11</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css" title="Color">
</head>

<body>
<?php
    echo "Nome Servidor: \$_SERVER['SERVER_NAME'] <br/>";
    echo 'IP do servidor: $_SERVER["SERVER_ADDR"]<br/>';
    echo 'Directorio raíz: $_SERVER["DOCUMENT_ROOT"]<br/>';
    echo 'Porto do servidor: $_SERVER["SERVER_PORT"]<br/>';
    echo 'Nome do script: $_SERVER["SCRIPT_NAME"]<br/>';
    echo 'Dir IP do cliente: $_SERVER["REMOTE_ADDR"]<br/>';
    echo 'Nome do cliente: $_SERVER["REMOTE_PORT"]<br/>';

    //Para ver o valor correctamente e non o texto literal
    echo "Nome Servidor: ".$_SERVER['SERVER_NAME']." <br/>";
    //Outra forma de escribilo
    echo "Nome Servidor: {$_SERVER['SERVER_NAME']} <br/>";
    echo 'IP do servidor: '.$_SERVER["SERVER_ADDR"].'<br/>';
    echo 'Directorio raíz: '.$_SERVER["DOCUMENT_ROOT"].'<br/>';
    echo 'Porto do servidor: '.$_SERVER["SERVER_PORT"].'<br/>';
    echo 'Nome do script: '.$_SERVER["SCRIPT_NAME"].'<br/>';
    echo 'Dir IP do cliente: '.$_SERVER["REMOTE_ADDR"].'<br/>';
    echo 'Nome do cliente: '.$_SERVER["REMOTE_PORT"].'<br/>';
?>
</body>
</html>