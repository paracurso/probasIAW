<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Exercicio10</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css" title="Color">
</head>

<body>
<?php
	$modulo = "IAW";
	$horas = 122;
	$dias = "martes. mércores e xoves";

  	echo "<p>O módulo de $modulo ten unha duración total de $horas horas.</p>";
?>
  	<table align="center" border="4" bordercolor="purple" cellpadding="10" cellspacing="20">
		<tr>
			<th bgcolor="yellow">Hora</th>
			<th>Luns</th>
			<th>Martes</th>
			<th>M&eacute;rcores</th>
			<th>Xoves</th>
			<th>Venres</th>
		</tr>
		<tr>
			<td>8-10</td>
			<td>IAW</td>
			<td>SEG</td>
			<td>SI</td>
			<td>SEG</td>
			<td>SI</td>
		</tr>
		<tr>
			<td>10-12</td>
			<td>EIE</td>
			<td>IAW</td>
			<td>SER</td>
			<td>SI</td>
			<td>SEG</td>
		</tr>
		<tr>
			<td align="center" colspan="5">DESCANSO</td>
		</tr>
		<tr>
			<td>12-14</td>
			<td>SER</td>
			<td>SER</td>
			<td>EIE</td>
			<td>IAW</td>
			<td>SER</td>
		</tr>
		
	</table>

<?php
	echo "<p>Este módulo impárteses os días: $dias.</p>";
?>
</body>
</html>