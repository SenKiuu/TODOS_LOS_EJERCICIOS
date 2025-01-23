<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>

    <style>

body {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.dado {
    background-color: blue;
    padding: 20px;
    border-radius: 10px;
    margin-right: 20px;
    text-align:center;
    font-size: 25px;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
}


</style>

</head>
<body>
<?php
        $Mensaje = "Actualiza la página para ver otro resultado";
        echo $Mensaje;
        $randado = rand (1,10);
    ?>

    <div class="container">
        <div class="dado">
            <?php

           $valoresDados = [];
          
for ($i = 0 ; $i < $randado; $i++ ){

$Dado = rand(1,6);
$valoresDados[] = $Dado;

echo "<img src='../../EJERCICIOS 0/Dado{$Dado}.webp'>";

}

$maxDado = max($valoresDados);

echo "El valor más alto es: " . $maxDado;

            ?>
</div>
</div>
</body>
</html>