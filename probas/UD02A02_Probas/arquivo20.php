<?php
echo "<h1>Exercicio include</h1>";
require 'arquivo20_vars.php';
echo "<h4>Valor das variables</h4>";
echo "<ul>  
        <li>Variable numérica: $num</li>
        <li>Variable cadea: $cadea</li>
    </ul>";
$num = 45;
$cadea = "Adeus";

require 'arquivo20_vars.php';
echo "<h4>Valor das variables - modificadas?</h4>";
echo "<ul>  
        <li>Variable numérica: $num</li>
        <li>Variable cadea: $cadea</li>
    </ul>";
?>