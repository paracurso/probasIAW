<?php
echo "<h1>Exercicio include</h1>";
include_once 'arquivo19_vars.php';
echo "<h4>Valor das variables</h4>";
echo "<ul>  
        <li>Variable numérica: $num</li>
        <li>Variable cadea: $cadea</li>
    </ul>";
$num = 45;
$cadea = "Adeus";

include_once 'arquivo19_vars.php';
echo "<h4>Valor das variables - modificadas?</h4>";
echo "<ul>  
        <li>Variable numérica: $num</li>
        <li>Variable cadea: $cadea</li>
    </ul>";
?>