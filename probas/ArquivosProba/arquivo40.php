<?php
echo "<h3>Postincremento</h3>";
$a = 5;
echo "Debería ser 5: ".$a++."<br>\n";
echo "Debería ser 6: ".$a."<br>\n";

echo "<h3>Preincremento</h3>";
$a = 5;
echo "Debería ser 6: ".++$a."<br>\n";
echo "Debería ser 6: ".$a."<br>\n";

echo "<h3>Postdecremento</h3>";
$a = 5;
echo "Debería ser 5: ".$a--."<br>\n";
echo "Debería ser 4: ".$a."<br>\n";

echo "<h3>Predecremento</h3>";
$a = 5;
echo "Debería ser 4: ".--$a."<br>\n";
echo "Debería ser 4: ".$a."<br>\n";

?>
