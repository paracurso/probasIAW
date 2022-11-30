<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Exercicio6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css" title="Color">
</head>

<body>
<?php
  	echo "<p>O módulo de IAW ten unha duración total de 122 horas.</p>";
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
			<td align="center" colspan="6">DESCANSO</td>
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
	echo "<p>Este módulo impárteses os días: martes, mércores e xoves.</p>";
?>
</body>
</html>