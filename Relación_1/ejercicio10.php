<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>
    <?php

    $a = -1;
    $b = 2;
    $c = 5;

    $solucion1 = null;
    $solucion2 = null;

    $discriminante = ($b ** 2) - (4 * $a * $c);

    if ($discriminante < 0) {
        print("La ecuación no tiene resultados reales.");
    } else {
        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);

        printf("La primera solución de la ecuación es: %.1f<br>", $solucion1);
        printf("La segunda solución de la ecuación es: %.1f", $solucion2);
    }; ?>
</body>

</html>