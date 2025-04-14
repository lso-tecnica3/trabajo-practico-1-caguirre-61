<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablero de Ajedrez</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 30px auto;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<table border="1">
    <?php
    //este for lo que genera son las filas
    for ($fila = 0; $fila < 8; $fila++) {
        print("<tr>");
        //este for genera las columnas donde si la suma de la fila mas la col es par, se pinta de blanco y es impar de negro
        for ($col = 0; $col < 8; $col++) {
            if (($fila + $col) % 2 == 0) {
                print("<td class='white'></td>");
            } else {
                print("<td class='black'></td>");
            }
        }
        print("</tr>");
    }
    ?>
</table>

</body>
</html>
