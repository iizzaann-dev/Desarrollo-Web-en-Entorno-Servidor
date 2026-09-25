<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>
    <h2>Vamos a valorar los triangulos</h2>

    <?php

    /*Isósceles*/
    $triangulo1 = [
        3.5,
        3.5,
        3.5
    ];

    if ($triangulo1[0] == $triangulo1[1] && $triangulo1[1] == $triangulo1[2]) {
        print("El triángulo es equilátero.");
    } elseif (
        ($triangulo1[0] == $triangulo1[1] && $triangulo1[1] != $triangulo1[2]) ||
        ($triangulo1[0] == $triangulo1[2] && $triangulo1[0] != $triangulo1[1]) ||
        ($triangulo1[1] == $triangulo1[2] && $triangulo1[0] != $triangulo1[1])
    ) {
        print("El triángulo es isósceles.");
    } else {
        print("El triángulo es escaleno.");
    }

    ?>
</body>

</html>