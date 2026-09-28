<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>

<body>
    <?php

    $nota = 7;

    switch ($nota) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            printf("Has sacado un %d, por lo tanto estas suspenso.", $nota);
            break;
        case 5:
            printf("Has sacado un %d, por lo tanto tienes un suficiente.", $nota);
            break;
        case 6:
            printf("Has sacado un %d, por lo que tienes un bien.", $nota);
            break;
        case 7:
        case 8:
            printf("Has sacado un %d, por lo que tienes un notable.", $nota);
            break;
        case 9:
        case 10:
            printf("Has sacado un %d, por lo que tienes un sobresaliente.", $nota);
    }; ?>
</body>

</html>