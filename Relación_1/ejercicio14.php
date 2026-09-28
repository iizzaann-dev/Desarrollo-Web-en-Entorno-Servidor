<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>

<body>

    <?php

    $numeroEntero = 7;
    $resultado = 0;

    for ($i = 1; $i <= $numeroEntero; $i++) {

        $resultado += $i;
    }

    printf("El sumatorio de los %d primeros números naturales es: %d.", $numeroEntero, $resultado);; ?>

</body>

</html>