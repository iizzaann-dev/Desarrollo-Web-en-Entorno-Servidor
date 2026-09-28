<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>

<body>
    <?php

    $acumulador = 1;
    $factorial = 10;
    $resultado = 1;

    for ($i = 0; $i < $factorial; $i++) {

        $resultado = $resultado * $acumulador;
        $acumulador++;
    }

    printf("El factorial de %d es : %d", $factorial, $resultado);; ?>
</body>

</html>