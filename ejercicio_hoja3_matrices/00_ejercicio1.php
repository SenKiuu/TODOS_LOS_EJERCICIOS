<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cartas = [];
    $cartasRandom = rand(5, 10);
    for ($i = 0; $i < $cartasRandom; $i ++){

        $numeroCarta = rand(1, 10);
        $cartas [] = $numeroCarta;
        echo "<img src='../ejercicioclase/cartas_poker/carta{$numeroCarta}.jpeg' style='width: 100px; height: auto;'>";
    }
    
    $alto = max($cartas);
    echo "<br> el valor mas alto es {$alto} ";
    echo "<img src='../ejercicioclase/cartas_poker/carta{$alto}.jpeg' style='width: 100px; height: auto;'>";


    $bajo = min($cartas);
    echo "<br>el valor mas bajo es {$bajo}";
    echo "<img src='../ejercicioclase/cartas_poker/carta{$bajo}.jpeg' style='width: 100px; height: auto;'>";

    ?>
</body>
</html>