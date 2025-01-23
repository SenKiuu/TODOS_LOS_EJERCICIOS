<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORASAUNES</title>
</head>
<body>
    <?php 
    $emojisCantidad = rand(7, 20);
    $corasaunes = [];

    // creamos un bucle for para meter dentro del array emoticonos[] los emojis 
    // y luego imprimirlos
    for ($i = 0; $i < $emojisCantidad; $i++) {
        $emoticono = "&#" . rand(128147, 128152) . ";";
        $emoticonos[] = $emoticono;
    }

    echo "<h1>Corasaunes: </h1>";
    echo implode(" ", $emoticonos);

    echo "<h2>Contador de corazoines :</h2>";

    //contador de emojis que se repiten;

    $contador = array_count_values($emoticonos);

    // lo que hace es que recorre el array con el primer codigo y lo asocia al emoji
    // ademas de luego almacenar la cantidad de veces que se ha repetido el emoji, 
    // despues lo imprime y lo manda a imprimir 

    foreach ($contador as $emoji => $cantidad) {
        echo "$emoji $cantidad<br>";
    }
    ?>
</body>
</html>