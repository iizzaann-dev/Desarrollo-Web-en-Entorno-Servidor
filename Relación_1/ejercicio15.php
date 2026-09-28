<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>

<body>
    <?php

    $nPrimo = 7;
    $esPrimo = false;

    for ($i = 2; $i < $nPrimo; $i++) {
        if ($nPrimo % $i == 0) {
            $esPrimo = true;
            break;
        }
    };

    if ($esPrimo) {
        printf("El número %d es primo", $nPrimo);
    } else {
        printf("El número %d no es primo", $nPrimo);
    }
    ?>
</body>

</html>