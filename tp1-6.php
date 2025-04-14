<!DOCTYPE html>
<html>
<head>
    <title>Tabla con Listas</title>
    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            vertical-align: top;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <?php
        // Primer fila de la tabla
        // Este for recorre las 5 columnas
        for ($col = 0; $col < 5; $col++) {
            print"<td><ul>";
            
            // Este for agrega 10 elementos <li> dentro de la columna actual
            for ($celda = 1; $celda <= 10; $celda++) {
                // calcula el número que se va a mostrar
                // para la primera columna, muestra del 1 al 10
                // segunda columna, del 11 al 20, y así sucesivamente
                $cuenta = ($celda + $col * 10);
                print ("<li>$cuenta</li>");
            }

            print "</ul></td>";
        }
        ?>
    </tr>
    
    <tr>
        <?php
        // Segunda fila de la tabla
        // Recorre nuevamente 5 columnas
        for ($col = 0; $col < 5; $col++) {
            print "<td><ol>"; // Inicia una celda con lista ordenada <ol>

            // Este for recorre 10 elementos para cada columna
            for ($celda = 0; $celda < 10; $celda++) {
                // Calcula un número decreciente desde 100 hacia abajo
                // Primera columna: 100 a 91, Segunda: 90 a 81, etc.
                $cuenta2 = 100 - ($celda + $col * 10);
                print "<li>$cuenta2</li>";
            }

            print "</ol></td>";
        }
        ?>
    </tr>
</table>
</body>
</html>

</body>
</html>
