<?php
//Recorrido filas
/*for ($i = 0; $i < 3; $i++) {
    
    //Recorrido columnas
    for($j = 0; $j < 5; $j++) {
        $array[$i][$j] = $i + $j;
    }

}
*/

//print_r($array);


/*$matriz1 = array(
    array(2,0,1,4,5),
    array(3,0,0,7,2),
    array(5,1,1,5,3)
);

foreach($matriz1 as $posFila => $fila) {
    foreach($fila as $posCol => $valor) {
        $trasposta [$posCol][$posFila] = $valor;
    }
}
print_r($trasposta);

*/

function eCadrada($array) {
    $rdo = false;
    if (count($array) > 0) {
        if (count($array) == count($array[0])) {
            $rdo = true;
        }
    }
    return $rdo;
}

function crearMatrizIdentidade($tam) {
    for($i = 0; $i < $tam; $i++) {
        for($j = 0; $j < $tam; $j++) {
            if ($i == $j) {
                $array[$i][$j] = 1;
            } else {
                $array[$i][$j] = 0;
            }
        }
    }
    return $array;
}

function crearMatrizDiagonal($tam) {
    $array = [];
    if (is_integer($tam) && ($tam > 0)) {
        for($i = 0; $i < $tam; $i++) {
            for($j = 0; $j < $tam; $j++) {
                if ($i == $j) {
                    $array[$i][$j] = rand(1,9);
                } else {
                    $array[$i][$j] = 0;
                }
            }
        }
    }
    return $array;
}

function obterTrasposta($array) {
    $trasposta = null;
    if (is_array($array)) {
        foreach($array as $posFila => $fila) {
            foreach($fila as $posCol => $valor) {
                $trasposta [$posCol][$posFila] = $valor;
            }
        }
    }
    return $trasposta;
}

function eSimetrica($array)
{
    $coinciden = true;
    $posFila = 0;
    $trasposta = obterTrasposta($array);
    while ($coinciden && ($posFila < count($array))) {
        $posCol = 0;
        while($coinciden && ($posCol < count($array[$posFila]))) {
            if ($array[$posFila][$posCol] != $trasposta[$posFila][$posCol]) {
                $coinciden = false;
            }
            $posCol++;
        }
        $posFila++;
    }
    
    return $coinciden;
}


$matriz1 = array(
    array(2,1,1),
    array(1,0,0),
    array(1,0,0)
);
echo eSimetrica($matriz1);
//print_r(crearMatrizIdentidade(5));


?>