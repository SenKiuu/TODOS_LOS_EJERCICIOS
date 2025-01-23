<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMOJIIIIIIIS</title>
</head>
<body>
    <?php
    // Generar un grupo de entre 10 y 20 emoticonos aleatorios
    $cantidad = rand(10, 20);
    $emoticonos = [];

    for ($i = 0; $i < $cantidad; $i++) {
        $emoticono = "&#" . rand(128512, 128580) . ";";
        $emoticonos[] = $emoticono;
    }

    // Seleccionar un emoticono al azar para buscar
    $emoticonoABuscar = "&#" . rand(128512, 128580) . ";";

    // Mostrar el grupo de emoticonos
    echo "Grupo de emoticonos generados: " . implode(" ", $emoticonos) . "<br>";

    // Mostrar el emoticono a buscar
    echo "Emoticono a buscar: " . $emoticonoABuscar . "<br>";

    // Verificar si el emoticono está en el grupo
    if (in_array($emoticonoABuscar, $emoticonos)) {
        echo "El emoticono está en el grupo.";
    } else {
        echo "El emoticono NO está en el grupo.";
    }
    ?>
</body>
</html>