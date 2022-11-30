<?php
/* exemplo 1 */
$i = 1;
echo "<p>";
while ($i <= 10):
    echo $i . " ";
    $i++;
endwhile;
echo "</p>\n";

/* exemplo 2 */
$i = 1;
echo "<p>";
while ($i <= 10) {
    echo $i++ . " ";  /* o valor presentado sería
                   $i antes do incremento
                   (post-incremento) */
}
echo "</p>";

?> 