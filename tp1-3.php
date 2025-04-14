<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Mundo Escalado</title>
</head>
<body>
<?php
//este for lo que hace es empezar el ciclo en 10 y hacerlo hasta el 100,
//y como le puse que en vez sume de a uno lo haga de a 10, eso va incrementar el valor de i y la palabra va a poder agrandandose mas y se va a ver la diferencia
for ($i = 10; $i <= 100; $i += 10) {
    print ("<p style='font-size: {$i}px'>Hola mundo</p>";)
}
?>

</body>
</html>
