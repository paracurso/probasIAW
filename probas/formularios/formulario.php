<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="GET">
        <label for="n">Usuario:</label>
        <input id="n" type="text" name="nome"/>
        </br>
        <label>Baloncesto <input type="checkbox" name="deporte" value="balon"></label>
        </br>
        <label>Futbol <input type="checkbox" name="deporte" value="futbol"></label>
        </br>
        <label>Maior <input type="radio" name="idade" value="maior" checked="checked"/></label>
        <label>Menor <input type="radio" name="idade" value="menor"/></label>
        </br>
        

        <?php
        include 'datos.php';
        echo "<label>Tipo usuario 
                <select name='tipoUser'>";
        foreach($tipos as $fila) {
            echo "<option value='" .$fila[0]. "'>" .$fila[1]. "</option>";
        }
        echo "</select>
            </label>";

        ?>
        </br>
        <input type="submit" name="Enviar" value="enviar"/>
    </form>
</body>
</html>