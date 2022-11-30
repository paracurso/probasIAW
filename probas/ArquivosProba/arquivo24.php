<?php
$un_bool = TRUE;   // un valor booleano
$un_str  = "foo";  // una cadena de caracteres
$un_str2 = 'foo';  // una cadena de caracteres
$un_int  = 12;     // un número enteiro

echo gettype($un_bool); // imprime: boolean
echo gettype($un_str);  // imprime: string

// Se este valor é un enteiro, incrementalo en catro
if (is_int($un_int)) {
    $un_int += 4;
}

// Se $un_bool é unha cadea, imprimila
// (non imprime nada)
if (is_string($un_bool)) {
    echo "Cadea: $un_bool";
}
?>

