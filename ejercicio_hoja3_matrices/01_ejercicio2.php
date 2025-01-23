<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // con esto hacemos el bucle para imprimir las cartas aleatorias del 5 al 10
    echo "<h1>LA CARTA M&AacuteS ALTA</h1>";
    echo "Cartas<br>";
    $cartas = [];
    $cartasRandom = rand(5, 10);
    for ($i = 0; $i < $cartasRandom; $i ++){

        $numeroCarta = rand(1, 10);
        $cartas [] = $numeroCarta;
        echo "<img src='../ejercicioclase/cartas_poker/carta{$numeroCarta}.jpeg' style='width: 100px; height: auto;'>";
    }

    // con esto podemos sacar el valor mas alto de las cartas
    $alto = max($cartas);
    echo "<h1><br> el valor mas alto es {$alto} </h1> <br>";
    echo "<img src='../ejercicioclase/cartas_poker/carta{$alto}.jpeg' style='width: 100px; height: auto;'>";
    
    // con esto podemos sacar un numero random para eliminar la carta que salga
    echo "<h1> CARTA ELIMINADA</h1>";
    $cartaEliminadora = $cartas[array_rand($cartas)];
    echo "<img src='../ejercicioclase/cartas_poker/carta{$cartaEliminadora}.jpeg' style='width: 100px; height: auto;'>";

    // todas las cartas eliminadas usando un comparador ternario
    echo "<h1><br> Cartas totales que quedan</h1> <br>";
    $filtro = [];
    //el que tiene el array lo ponemos en el count
    for ($i = 0; $i <count($cartas); $i ++){
    //comparadores ternarios
        $cartas[$i] != $cartaEliminadora ? $filtro[$i] = $cartas[$i] : null;
        
    }

    foreach($filtro as $numr){
        echo "<img src='../ejercicioclase/cartas_poker/carta{$numr}.jpeg' style='width: 100px; height: auto;'>";
    }

    $altoNew = max($filtro);
    echo "<h1><br> el valor mas alto es {$altoNew} </h1> <br>";
   
    ?>
</body>
</html>