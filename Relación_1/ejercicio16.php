<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
    <style>
        .rojo {
            color: red;
        }

        .titulo {
            font-size: 2em;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php

    $numero = 34;

    printf("<span class = 'titulo'>Mostramos los divisores del número: %d </span>", $numero);

    echo "<br> <br>";

    for ($i = 1; $i <= $numero; $i++) {

        if ($numero % $i == 0) {
            print("<span class = 'rojo'>$i </span>");
        } else {
            print($i . " ");
        }
    }; ?>
</body>

</html>