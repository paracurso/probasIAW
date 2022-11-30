<?php
echo "<B><U>Sentenza if </U></B><BR>";

$var1 = 3;
$var2 = 4.5;

//Neste caso a avaliación é True
//if inclúe só unha sentenza pódense omitir as chaves
if ($var1 == 3)
    echo "1. A avaliación foi verdadeira<BR>";

//Neste caso a avaliación é True
//utilízase unha expresión composta
if (($var1 == 3) and ($var1 >= $var2 or $var2 > 4.4))
{
    echo "2. A avaliación foi verdadeira<BR>";
}

//Neste caso a avaliación é False pero como se
//usa o operador ! Fase transfórmase en True e 
//polo tanto execútase a sentenza interna ao if
if (!(($var2 > 10) or ($var1 == 3 and $var1 >= $var2)))
{
    echo "3. A avaliación foi verdadeira<BR>";
}
?>