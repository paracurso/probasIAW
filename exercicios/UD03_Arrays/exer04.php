<?php
function maiorPoboacion($array)
{
    $maior = 0;
    $cidade = "";
    if (is_array($array) && !empty($array)) {
        foreach($array as $clave => $valor) {
            if ($valor > $maior) {
                $maior = $valor;
                $cidade = $clave;
            }
        }
    }

    return $cidade;
}


$cidades = ["Coruña" => 150000, "Lugo" => 198000, "Ourense" => 100000, "Pontevedra" => 90000];
maiorPoboacion(5);

echo "A cidade con máis habitantes é: " . maiorPoboacion($cidades);


?>