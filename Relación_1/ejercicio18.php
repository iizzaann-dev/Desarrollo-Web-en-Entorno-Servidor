<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>

<body>
    <?php
    $numero1 = 54;
    $numero2 = 21;

    $real1 = $numero1;
    $real2 = $numero2;

    while ($numero2 != 0) {
        $resto = $numero1 % $numero2;
        $numero1 = $numero2;
        $numero2 = $resto;
    }

    if ($numero1 == 1) {
        printf("Los números %d y %d no tienen divisores comunes aparte del 1.", $real1, $real2);
    } else {
        printf("Los números %d y %d tienen divisores comunes. Su MCD es %d.", $real1, $real2, $numero1);
    }; ?>
</body>

</html>