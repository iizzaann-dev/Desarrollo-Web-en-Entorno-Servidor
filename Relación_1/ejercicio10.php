<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>

    <h1>Solución de una ecuación de segundo grado</h1>
    <?php
    $a = 2;
    $b = 3;
    $c = -2;

    if ($a == 0) {
        if ($b == 0) {
            print("La ecuación no tiene una solución real.");
        } else {
            $solucion1 = (-$c) / $b;
            printf("La solución a la ecuación es: %.1f", $solucion1);
        }
    } elseif ($b == 0) {
        if ($a == 0) {
            print("La ecuación no tiene una solución real.");
        } else {
            $solucion1 = sqrt((-$c) / $a);
            $solucion2 = -sqrt((-$c) / $a);
            printf("La primera solución a la ecuación es: %.1f", $solucion1);
            printf("La segunda solución a la ecuación es: %.1f", $solucion2);
        }
    } elseif ($c == 0) {
        if ($a == 0) {
            print("La ecuación no tiene una solución real.");
        } else {
            $solucion1 = 0;
            $solucion2 = (-$b) / $a;
            printf("La primera solución de la ecuación es: %.1f", $solucion1);
            printf("La segunda solución de la ecuación es: %.1f", $solucion2);
        }
    } else {
        $discriminante = ($b ** 2) - (4 * $a * $c);

        if ($discriminante < 0) {
            print("La ecuación no tiene soluciones reales.");
        } else {
            $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);

            printf("La primera solución de la ecuación es: %.1f<br>", $solucion1);
            printf("La segunda solución de la ecuación es: %.1f", $solucion2);
        }
    }; ?>
</body>

</html>