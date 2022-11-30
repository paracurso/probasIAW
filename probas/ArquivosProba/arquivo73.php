<?php
$var1 = 8;
echo "Arquivo: arquivo73.php -> antes da función include \$var1 é $var1<BR><BR>";

include 'arquivo73b.php';

echo "Arquivo: arquivo73.php -> despois da sentenza include \$var1 é $var1<BR><BR>";
echo "Arquivo: arquivo73.php -> a variable definida no corpo principal de arquivo73b.php \$var3 é $var3<BR><BR>";
?>