<?php
    $nomeUsuario = 'Manuel';
    define("AULA",25);
    const ANDAR = 'primeiro';

    print "O alumno $nomeUsuario está na aula AULA que está no andar ANDAR\n</br>\n";
    print "O alumno $nomeUsuario está na aula "  . AULA . " que está no andar "  . ANDAR . "\n</br>\n";
    //print "O alumno $nomeUsuario está na aula "  , AULA , " que está no andar "  , ANDAR;

    echo "O alumno $nomeUsuario está na aula AULA que está no andar ANDAR\n</br>\n";
    echo "O alumno $nomeUsuario está na aula "  . AULA . " que está no andar "  . ANDAR . "\n</br>\n";
    echo "O alumno $nomeUsuario está na aula "  , AULA , " que está no andar "  , ANDAR , "\n</br>\n";
?>