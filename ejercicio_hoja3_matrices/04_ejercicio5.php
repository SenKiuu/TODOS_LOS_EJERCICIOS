<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mas_emojis</title>
</head>
<body>
<?php
// Definir los rangos de los emoticonos según el problema
$rangos = [
    [128512, 128580],
    [129296, 129303],
    [129312, 129327],
    [129392, 129393],
    [129395, 129398],
    [129402, 129402],
    [129488, 129488],
];

// Crear un array para almacenar todos los emoticonos
$emoticonos = [];

// Recorrer los rangos y generar los emoticonos
foreach ($rangos as $rango) {
    for ($i = $rango[0]; $i <= $rango[1]; $i++) {
        $emoticonos[] = "&#$i;";
    }
}

// Mostrar todos los emoticonos
echo "<h1>Todos los emoticonos:</h1>";
echo implode(" ", $emoticonos);

// Seleccionar un emoticono al azar
$emoticonoAleatorio = $emoticonos[array_rand($emoticonos)];

// Mostrar el emoticono aleatorio
echo "<h2>Emoticono al azar:</h2>";
echo $emoticonoAleatorio;
?>

</body>
</html>