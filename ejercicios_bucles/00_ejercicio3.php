<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>

    <style>
        .circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-block;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

    </style>

</head>
<body>
    
<div>

<?php

echo "Actualiza la página para ver un resultado diferente"; 
$numcirculos = rand(1, 10);

?>

</div>

<div>

<table border="1">
    <tr>
        <?php
        for ($i = 0; $i < $numcirculos; $i++) {

            $colorInicio = 'hwb(' . rand(0, 360) . ' 0% 0%)'; 
            $colorFin = 'hwb(' . rand(0, 360) . ' 50% 50%)'; 
            echo '<td><div class="circle" style="background: linear-gradient(' . $colorInicio . ', ' . $colorFin . ');"></div></td>';
        }
        ?>
    </tr>
</table>
</div>
</body>
</html>