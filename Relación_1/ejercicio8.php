<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <?php

    const rubrica = [
        "inicial" => 10,
        "primera" => 20,
        "segunda" => 30,
        "tercera" => 40
    ];

    const califinaciones = [
        "inicial" => 5.1,
        "primera" => 7.2,
        "segunda" => 9.6,
        "tercera" => 4.2
    ];

    $notaFinal = null;

    foreach (rubrica as $clave => $valor) {
        $nota = (califinaciones[$clave] * $valor) / 100;

        if (califinaciones[$clave] == "inicial") {
            printf("La nota %s es: %.1f<br>", $clave, $nota);
        } else {
            printf("La %s nota es: %.1f<br>", $clave, $nota);
        }
        $notaFinal += $nota;
    }

    printf("Tu nota final es: %.1f", $notaFinal);

    ?>
</body>

</html>