<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Globales</title>
</head>

<body>
    <ul>
        <li>Document Root: <?= $_SERVER["DOCUMENT_ROOT"] ?></li>
        <br>
        <li>PHP-Self: <?= $_SERVER["PHP_SELF"] ?></li>
        <br>
        <li>Server_Name: <?= $_SERVER["SERVER_NAME"] ?></li>
        <br>
        <li>Server_Software: <?= $_SERVER["SERVER_SOFTWARE"] ?></li>
        <br>
        <li>Server_Protocol: <?= $_SERVER["SERVER_PROTOCOL"] ?></li>
        <br>
        <li>HTTP_Host: <?= $_SERVER["HTTP_HOST"] ?></li>
        <br>
        <li>HTTP_User-Agent: <?= $_SERVER["HTTP_USER_AGENT"] ?></li>
        <br>
        <li>Remote_ADDR: <?= $_SERVER["REMOTE_ADDR"] ?></li>
        <br>
        <li>Remote_Port: <?= $_SERVER["REMOTE_PORT"] ?></li>
        <br>
        <li>Script_Filename: <?= $_SERVER["SCRIPT_FILENAME"] ?></li>
        <br>
        <li>Request_Uri: <?= $_SERVER["REQUEST_URI"] ?></li>
        <br>
        <li>var_dump:</li>
        <?php var_dump($_SERVER); ?>
        <br>
        <li>print_r: <?= print_r($_SERVER) ?></li>
    </ul>
</body>

</html>