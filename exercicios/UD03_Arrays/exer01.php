<?php
function encherArray($numElem) 
{
    $array = [];
    for($i = 0; $i < $numElem; $i++) {
        $array[$i] = rand(1,10);
    }
    return $array;
}

$array = encherArray(9);
print_r($array);
?>