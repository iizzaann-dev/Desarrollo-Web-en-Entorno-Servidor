<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>

<body>
    <?php

    $dividendo = 17;
    $divisor = 5;

    $cociente = 0;
    $resto = $dividendo;

    while ($resto >= $divisor) {
        $resto = $resto - $divisor;
        $cociente++;
    }

    printf("Dividendo: %d<br>", $dividendo);
    printf("Divisor: %d<br>", $divisor);
    printf("Cociente: %d<br>", $cociente);
    printf("Resto: %d", $resto);; ?>
</body>

</html>