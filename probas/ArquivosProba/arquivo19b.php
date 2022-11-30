<?php
$nomeUsuario = 'Manuel'; 
define("aula", 25);
const ANDAR = 'primeiro'; 
print "O alumno $nomeUsuario está na aula aula que está no andar ANDAR\n</br>\n";
print "O alumno $nomeUsuario está na aula " . aula . " que está no andar " . ANDAR . "\n</br>\n";
//print "O alumno $nomeUsuario está na aula " , aula , " que está no andar " , ANDAR , "\n</br>\n";
echo "O alumno $nomeUsuario está na aula aula que está no andar ANDAR \n</br>\n";
echo "O alumno $nomeUsuario está na aula " . aula . " que está no andar " . ANDAR . "\n</br>\n";
echo "O alumno $nomeUsuario está na aula " , aula , " que está no andar " , ANDAR, "\n</br>\n";

?>