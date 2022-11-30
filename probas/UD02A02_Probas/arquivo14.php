<?php
//Todos os exemplos mostran os números do 1 ao 10
/* exemplo 1 */
echo "<p>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "</p>\n";

/* exemplo 2 */
echo "<p>";
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i . " ";
}
echo "</p>\n";

/* exemplo 3 */
$i = 1;
echo "<p>";
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i . " ";
    $i++;
}
echo "</p>\n";

/* exemplo 4 */
echo "<p>";
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i . " ", $i++);
echo "</p>";
?>