<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla Coloreada</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 30px auto;
        }
        td {
            width: 20px;
            height: 20px;
        }
        .verde {
            background-color: green;
        }
        .rojo {
            background-color: red;
        }
        .azul {
            background-color: blue;
        }
    </style>
</head>
<body>

<table border="1">
    <?php
    // este for genera las filas
    for ($fila = 0; $fila < 20; $fila++) {
        print "<tr>";
        //este for genera las columnas donde si la fila es igual a columna,van a ir dentro de la diagonal principal y se pintara de verde
        // y si fila es mayor a col va por debajo de la diagonal principal y si no viseversa y iria por arriba
        for ($col = 0; $col < 20; $col++) {
            if ($fila == $col) {
                print "<td class='verde'></td>";
            } elseif ($fila > $col) {
                print "<td class='rojo'></td>";
            } else {
                print "<td class='azul'></td>";
            }
        }
        print "</tr>";
    }
    ?>
</table>

</body>
</html>
