<?php

// Nome de constantes correctos con define
define("FOO",     "algo");
define("FOO2",    "algo máis");
define("FOO_BAR", "outro algo máis");

// Nomes de constantes incorrectos
define("2FOO",    "algo");

// Isto é válido, pero debería ser evitado:
// xa que quizás algún día PHP crea una constante mágica 
// co mesmo nome e nese caso provocaría un erro no script
define("__FOO__", "algo"); 

//Constantes coa palabra reservada const
// Funciona a partir de PHP 5.3.0
const CONSTANTE = 'Ola Mundo';

// Funciona a partir de PHP 5.6.0
const OUTRA_CONSTANTE = CONSTANTE.'; Adeus Mundo';
const ANIMAIS = array('perro', 'gato', 'pájaro');
echo ANIMAIS[1]; // mostra "gato"

// Funciona a partir de PHP 7
define('ANIMAIS2', array(
    'perro',
    'gato',
    'pájaro'
));
echo ANIMAIS2[1]; // mostra "gato"
?>
