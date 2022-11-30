<?php
function suma($operando1, $operando2) 
{
    $total = $operando1 + $operando2;
    echo "<p>suma de $operando1 + $operando2 = $total</p>\n";
}

function resta($operando1, $operando2) 
{
    $total = $operando1 - $operando2;
    echo "<p>suma de $operando1 - $operando2 = $total</p>\n";
}

function produto($operando1, $operando2) 
{
    $total = $operando1 * $operando2;
    echo "<p>suma de $operando1 * $operando2 = $total</p>\n";
}

function division($operando1, $operando2) 
{
    $total = $operando1 / $operando2;
    echo "<p>suma de $operando1 / $operando2 = $total</p>\n";
}

function operacionMates($operando1, $operando2, $operador = '-')
{
    switch($operador) {
        case '+':
            $total = $operando1 + $operando2;
            break;
        case '-':
            $total = $operando1 - $operando2;
            break;
        case '/':
            $total = $operando1 / $operando2;
            break;
        case '*':
            $total = $operando1 * $operando2;
            break;
    }

    return $total;
}
?>