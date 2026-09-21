<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo en PHP</title>
    <style>
        #estilo {
            color: aqua;
            font-size: 100px;
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
        }

        #body {
            background-color: grey;
        }
    </style>
</head>

<body id="body">
    <!-- ello World como texto basico -->
    <?php echo "Hello world"; ?>

    <!-- ello World como texto basico -->
    <h2><?php echo "Hello world"; ?></h2>

    <h2 id="estilo"><?php echo "Hello world"; ?></h2>

    <?php echo phpversion(); ?>

    <?php echo date("d/m/Y h:i:s A"); ?>
</body>

</html>