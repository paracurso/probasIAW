<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tipo = 'a';
        $pago = 'c';
        $compra = 95;
        $tipo = strtolower($tipo);
        $pago = strtoupper($pago);
        $correcto = true;
        $erro = 0;
        /*
        if ($tipo == 'x' || $tipo == 'a') {
            if ($pago == 'C' || $pago == 'P'){
                switch($tipo) {
                    case 'x':
                        switch($pago) {
                            case 'C':
                                $compra = $compra - ($compra * 0.15);
                                break;
                            case 'P':
                                $compra = $compra + ($compra * 0.10);
                                break;
                        }
                        break;
                    case 'a':
                        switch(strtoupper($pago)) {
                            case 'C':
                                $compra = $compra - ($compra * 0.20);
                                break;
                            case 'P':
                                $compra = $compra + ($compra * 0.05);
                                break;
                        }
                        break;                        
                }
                echo "<p>Tes que pagar $compra</p>\n";
            } else {
                echo "<p>Introduciches un pago incorrecto</p>\n";
            }
        } else {
            echo "<p>Introduciches un tipo incorrecto</p>\n";
        }
        */

        /*
        switch($tipo) {
            case 'x':
                switch($pago) {
                    case 'C':
                        $compra *= 0.85);
                        break;
                    case 'P':
                        $compra *= 1.10);
                        break;
                    default:
                        $erro = 2;
                        break;
                }
                break;
            case 'a':
                switch(strtoupper($pago)) {
                    case 'C':
                        $compra *= 0.80;
                        break;
                    case 'P':
                        $compra *= 1.05;
                        break;
                    default:
                        $erro = 2;
                        break;
                }
                break; 
            default:
                $erro = 1;
                break;  
        }
        if ($erro == 0) {
            echo "<p>Tes que pagar $compra</p>\n";
        } elseif ($erro == 1) {
            echo "<p>O parámetro tipo é incorrecto</p>\n";
        } else {
            echo "<p>O parámetro pago é incorrecto</p>\n";
        }
        */

        switch($tipo) {
            case 'x':
                switch($pago) {
                    case 'C':
                        $cargo = -0.15;
                        break;
                    case 'P':
                        $cargo = 0.10;
                        break;
                    default:
                        $erro = 2;
                        break;
                }
                break;
            case 'a':
                switch(strtoupper($pago)) {
                    case 'C':
                        $cargo = -0.20;
                        break;
                    case 'P':
                        $cargo = 0.05;
                        break;
                    default:
                        $erro = 2;
                        break;
                }
                break; 
            default:
                $erro = 1;
                break;  
        }
        if ($erro == 0) {
            echo "<p>Tes que pagar " . ($compra + ($compra * $cargo)) . "</p>\n";
        } elseif ($erro == 1) {
            echo "<p>O parámetro tipo é incorrecto</p>\n";
        } else {
            echo "<p>O parámetro pago é incorrecto</p>\n";
        }
        
        
/*
        switch(strtolower($tipo . $pago)){
            case "xc":
                $compra = $compra - ($compra * 0.15);
                break;
            case "xp":
                $compra = $compra + ($compra * 0.10);
                break;
            case "ac":
                $compra = $compra - ($compra * 0.2);
                break;
            case "ap":
                $compra = $compra + ($compra * 0.05);
                break;
            default:
                echo "<p>Introduciches un parámetro incorrecto</p>\n"; 
                $correcto = false;
        }

        if ($correcto) {
            echo "<p>Tes que pagar $compra</p>\n";
        } 
        */
    ?>
</body>
</html>