<?php
/* Erro intencionado de arquivo */
$my_file = @file ('non_existent_file') or
    die ("A apertura de arquivo fallou: o erro foi '$php_errormsg'");

// isto funciona con calquera expresión, non so con funcións:
$value = @$cache[$key];
// non producirá unha anotación se o índice $key non existe.
?>

