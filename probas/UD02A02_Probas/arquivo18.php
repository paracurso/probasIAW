<?php
echo "<p>Con break</p>";
for ($i = 1; $i <= 10; $i++) {
    for ($j=1; $j<=10; $j++)  {
        if ($j == 5) {
            continue;
        }
        echo "$i.$j ";
    }
    echo "</br>";
}

//Con break 2
echo "<p>Con break 2</p>";
for ($i = 1; $i <= 10; $i++) {
    for ($j=1; $j<=10; $j++)  {
        if ($j == 5) {
            break 2;
        }
        echo "$i.$j ";
    }
    echo "</br>";
}
?>