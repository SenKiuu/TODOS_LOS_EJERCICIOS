<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados_Ordenados</title>
</head>
<body>

<?php 

$tiradaRandom = rand(2, 7);
$dados = [];

echo "<h1>Imágenes de los dados en orden original:</h1>";
for ($i = 0; $i < $tiradaRandom; $i++) {
    $dadorandom = rand(1, 6);
    $dados[] = $dadorandom;
    echo "<img src='../dado/cara{$dadorandom}.webp' alt='cara' style='width:50px; margin-right:5px;'>";
}

sort($dados);

echo "<h1>Imágenes de los dados ordenados de menor a mayor:</h1>";
foreach ($dados as $dado) {
    echo "<img src='../dado/cara{$dado}.webp' alt='cara' style='width:50px; margin-right:5px;'>";
}
?>


</body>
</html>