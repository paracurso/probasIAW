<?php
$a = 1;
$b = 2;

function Suma()
{
    $a = "variable local";
    echo "<p>Variable global: ". $GLOBALS['a'] . "</p>\n";
    echo "<p>Variable local: $a</p>\n";
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Suma();
echo "<p>Valor da variable b: $b</p>\n";
?>
