<?php
function validaVbleForm($var)
{
    if (!isset($_REQUEST[$var])) {
        $tmp = "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

function notaMedia($vector) {
      
      $rdo = 0;
      
      if (is_array($vector) ) {
        
        foreach($vector as $clave => $valor) {
          $rdo += $vector[$clave];
        }
        $rdo /= count($vector);
      }


      return $rdo;    

    }

    function mostrarArray($vector, $media) {

      $rdo = 0;
      $i = 1;
      if (is_array($vector) ) {
        echo "<table border='1'>
            <tr>
              <td></td>
              <th> Notas</td>
            </tr>";
        foreach($vector as $clave => $valor) {
          echo "<tr> 
              <th> Nota $i </td>
              <td> $valor </td>
              </tr>";
          $i++;
        }
        echo "<tr> 
            <th> TOTAL </td>
            <td> $media </td>
           </tr>
           </table>";
        $rdo = 1;
      }
      return $rdo;
    }

?>