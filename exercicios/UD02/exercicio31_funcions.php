<?php
define ("IVA", "21");
define ("PI","3.141516");

function suma($v1, $v2) {
    echo "O valor da suma de $v1 e $v2 é ".($v1+$v2)."<br/>";
}

function prezoFinal($prezo) {
    return ($prezo+($prezo*IVA/100));
}

function cociente(int $v1, int $v2){
    $resultado[0] = $v1 / $v2;
    $resultado[1] = $v1 % $v2;
    return $resultado;
}

function transformarHora(int $horas): array {
    $rdo[] = $horas * 60;
    $rdo[] = $horas * 60 * 60;
    
    return $rdo;
}

function area($radio, $altura): float {
    return (2*PI*$radio*($radio+$altura));

}

function volume($radio, $altura) {
    return (PI*$radio**2*$altura);
}
?>