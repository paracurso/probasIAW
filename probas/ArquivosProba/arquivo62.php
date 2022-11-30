<?php
/* exemplo 1 */
$i = 1;
while ($i <= 10) {
    echo $i++;  /* o valor presentado sería
                   $i antes do incremento
                   (post-incremento) */
}

/* exemplo 2 */
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>