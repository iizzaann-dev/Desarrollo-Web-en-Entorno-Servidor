<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php
    const dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    printf("El primer dia de la semana es: %s.<br> <br>", dias[0]);

    print("Los días de la semana son: ");

    //Por cada elemento de dias, guarda su índice en $indice y su valor en $dia.
    foreach (dias as $indice => $dia) {
        if ($indice == count(dias) - 1) {
            echo $dia . ".";
        } else {
            echo $dia . ", ";
        }
    }
    ?>

    <ol>
        <?php foreach (dias as $dia) { ?>
            <li><?= $dia ?></li>
        <?php } ?>
    </ol>

</body>

</html>