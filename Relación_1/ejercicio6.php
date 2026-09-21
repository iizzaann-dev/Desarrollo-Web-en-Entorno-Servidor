<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>

    <?php
    class Fruta
    {
        public string $nombre;
        public string $color;

        public function set_name(string $nombre)
        {
            $this->nombre = $nombre;
        }

        public function get_name()
        {
            print($this->nombre);
        }
    }; ?>

    <?php
    $fruta = new Fruta();

    $fruta->set_name("Naranja");
    $fruta->get_name();; ?>

</body>

</html>