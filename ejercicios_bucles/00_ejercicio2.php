<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <style>
        .circle {
            width: 50px;
            height: 50px;
            background-color: black;
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
            echo '<tr><td><div class="circle"></div></td></tr>';
        }
        
        ?>
    </tr>
</table>
</div>
</body>
</html>
