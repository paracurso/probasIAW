<?php
echo "<B><U>Sentenza elseif </U></B><BR>";

$var1 = 8;

//Neste caso a avaliación é False
if ($var1 < 7) {
    echo "1. A avaliación foi verdadeira<BR>";
} elseif ($var1 < 8) {
    echo "2. A avaliación é verdadeira no primeiro elseif<BR>";
} elseif ($var1 < 9) {
    //Esta sentenza elseif avalíase coma True
    echo "3. A avaliación é verdadeira no segundo elseif<BR>";
} elseif ($var1 < 10) {
    //Esta sentenza elseif xa non se avaliará
    echo "4. A avaliación é verdadeira no terceiro elseif<BR>";
} else {
    echo "5. A avaliación foi sempre falsa<BR>";
}

//Esta sentenza echo executarase coma semre, xa que está fóra
// do bloque if/elseif/else
echo "Saíu do if";
?>