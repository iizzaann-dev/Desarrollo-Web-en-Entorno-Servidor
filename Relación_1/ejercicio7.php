<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>

<body>
    <?php
    $media1 = 3.4;
    $media2 = 6.2;

    $notaFinal = ($media1 + $media2) / 2;

    if ($notaFinal >= 5) {
        printf("Has aprobado. Tu nota final es: %.1f", $notaFinal);
    } else {
        printf("Has suspendido. Tu nota final es: %.1f", $notaFinal);
    }; ?>
</body>

</html>