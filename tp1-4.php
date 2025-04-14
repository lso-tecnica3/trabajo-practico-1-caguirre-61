<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FizzBuzz</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 30px auto;
        }
        td {
            border: 1px solid #000;
            padding: 8px 16px;
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <?php
    //este for lo que hace es primero generar las filas y completandolas segun corresponda el numero y si es multiplo de 3 o de 5, o de los 2 juntos
    for ($i = 1; $i <= 50; $i++) {
        print "<tr>";
        print "<td>$i</td>";

        if ($i % 3 == 0 && $i % 5 == 0) {
            print "<td>FizzBuzz</td>";
        } elseif ($i % 3 == 0) {
            print "<td>Fizz</td>";
        } elseif ($i % 5 == 0) {
            print "<td>Buzz</td>";
        } else {
            print "<td></td>";
        }

        print"</tr>";
    }
    ?>
</table>

</body>
</html>
