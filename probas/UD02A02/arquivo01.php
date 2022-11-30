<?php
    $num = rand(1,10);
    echo "<p>Num: $num</p>\n";
    if (($num % 2) == 0) {
        echo "<p>Tocouche un número par</p>\n";
    } else {
        echo "<p>Tocouche un número impar</p>\n";
    }

    echo (($num % 2) == 0) ? "<p>Tocouche un número par</p>\n" : "<p>Tocouche un número impar</p>\n";
    echo "<p>Outras liñas</p>\n";
?>