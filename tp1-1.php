<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla de multiplicar</title>
</head>
<style>
.white {
            background-color: blue;
        }
        </style>
<body>
<table border>
        <th>X</th>
    <?php 
        //este for lo que hace es generar la primer fila del 1 al 10 despues de la X
        for ($x = 1; $x <= 10; $x++){
           print("<th class='white'> $x </th>");
        }
        //este for lo que hace es generar las columnas para cada numero del 1 al 10
     for ($i = 1; $i <= 10; $i++){
        print("<tr>");
            print("<th class='white'> $i </th>");
            // este for se encarga de en cada celda poner el valor de la multiplicacion
             for ($j = 1; $j <= 10; $j++){
                $multiplicacion=$i * $j;
               print("<td> $multiplicacion </td>");
             }
        print("</tr>");
            }   
    ?>
</table>
</body>
</html>
