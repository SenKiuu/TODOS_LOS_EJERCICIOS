<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>

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

           $valorespares = 0;
           $valoresimpares = 0;
          
for ($i = 0 ; $i < $randado; $i++ ){

$Dado = rand(1,6);

if ($Dado %2 == 0){

$valorespares ++;

}else{

$valoresimpares++;

}



echo "<img src='../../EJERCICIOS 0/Dado{$Dado}.webp'>";

}

echo "Hay : " . $valorespares . " valores que son pares, y : " .$valoresimpares . " que son impares";


            ?>
</div>
</div>
</body>
</html>