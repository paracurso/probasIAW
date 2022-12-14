<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$concesionarios = [

    "conce1" => ["bmw" => 7,
            "audi" => 25,
            "seat" => 3,
            "hyundai" => 4,
            "toyota" => 32],
    "conce2" => ["bmw" => 20,
            "audi" => 27,
            "seat" => 45,
            "hyundai" => 37,
            "toyota" => 81],
    "conce3" => ["bmw" => 13,
            "audi" => 21,
            "seat" => 56,
            "hyundai" => 40,
            "toyota" => 21],
    "conce4" => ["bmw" => 8,
            "audi" => 24,
            "seat" => 71,
            "hyundai" => 82,
            "toyota" => 41],
    "conce5" => ["bmw" => 7,
            "audi" => 51,
            "seat" => 60,
            "hyundai" => 23,
            "toyota" => 52]
];
$maximo = 0;
$marcaN = "";
$claves = array_keys($concesionarios["conce1"]);

foreach ($claves as $valor) {
    $marcasV[$valor] = 0;
}

foreach ($concesionarios as $clave => $fila) {
    $totalC = 0;
    //Recorrido das ventas dun concesionario
    foreach($fila as $marca =>$valor) {
        $totalC += $valor;
        if ($valor > $maximo) {
            $maximo = $valor;
            $marcaN = $marca;
        }
        if ($valor > $marcasV[$marca]) {
            $marcasV[$marca] = $valor;
            $concesV[$marca] = $clave;
        }
    }
    echo "O total de ventas do concesionario $clave é: " . $totalC . "</br>";
}

echo "A venta máxima foi de " . $maximo . " coches na marca " . $marcaN . "</br>";
foreach ($marcasV as $marca => $venta) {
    echo "O máximo de ventas para " . $marca . " é " . $venta 
            . " no concesionario " . $concesV[$marca] . "</br>";
}
?>
</body>
</html>