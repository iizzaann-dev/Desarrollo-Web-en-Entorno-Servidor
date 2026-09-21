<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php
    const dias = [
        "Lunes" => 30,
        "Martes" => 25,
        "Miércoles" => 28,
        "Jueves" => 32,
        "Viernes" => 29,
        "Sábado" => 31,
        "Domingo" => 27
    ];

    print("La temperatura máxima del primer día de la semana es: " . dias["Lunes"] . "ºC." . "<br>" . "<br>");

    foreach (dias as $dia => $temperatura) {
        echo "La temperatura máxima del día " . $dia . " es: " . $temperatura . "ºC.<br>";
    }
    ?>

    <ol>
        <?php
        foreach (dias as $dia => $temperatura) { ?>
            <li>
                <?php printf("El %s la temperatura máxima fue %d", $dia, $temperatura); ?>
            </li>
        <?php } ?>
    </ol>


    <table border="1">
        <tr>
            <th>Día</th>
            <th>Temperatura Máxima</th>
        </tr>

        <?php
        foreach (dias as $dia => $temperatura) { ?>
            <tr>
                <?php printf("<td>%s</td><td>%d</td>", $dia, $temperatura); ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>