<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica1</title>
<style>
    /* .caja{
border-color:black;
border:red;
width: 20px;
height: 20px; 
    } */
</style>
</head>
<body>

<p>ACTUALIZAR LA PAGINA PARA VOLVER A TIRAR</p>

<?php 

// VARIABLES_DADO_ALEATORIAS_ENTRE_1_Y_6
$dado = rand(1,6);
$dado1 = rand(1, 6); 


// TODAS_LAS_VARIABLES 
$suma = $dado + $dado1;
$resta = $dado - $dado1;
$multiplicacion = $dado * $dado1;
$division = $dado / $dado1;
$resto = $dado % $dado1;
$potenciacion = $dado ** $dado1;
$maximo = max($dado, $dado1);
$minimo = min($dado, $dado1);

// TODO_LO_QUE_IMPRIMO 
//chivato dados
// echo "$dado |";
// echo " $dado1";
// imagenes conel random del dado concatenado para que imprima las fotos/caras
echo "<img src='../dado/cara".$dado.".webp'> ";
echo "<img src='../dado/cara".$dado1.".webp'> ";
echo "<br>";
?>

<div class="caja">
<?php
echo "la suma es = $suma";
echo "<br>";
echo "<br>";
?>
</div>

<div class = "caja">
<?php
echo "la resta es = $resta";
echo "<br>";
echo "<br>";
?>
</div>

<div class = "caja">
<?php
echo "la multiplicaci&oacuten es = $multiplicacion";
echo "<br>";
echo "<br>";
?>
</div>

<div class = "caja">
<?php
echo "la divisi&oacuten es = $division";
echo "<br>";
echo "<br>";
?>
</div>


<div class = "caja">
<?php
echo "la resto es = $resto";
echo "<br>";
echo "<br>";
?>
</div>


<div class = "caja">
<?php
echo "la potenciaci&oacuten es = $potenciacion";
echo "<br>";
echo "<br>";
?>
</div>

<div class = "caja">
<?php
echo "la m&aacuteximo es = $maximo";
echo "<br>";
echo "<br>";
?>
</div>

<div class = "caja">
<?php
echo "la m&iacutenimo es = $minimo";
echo "<br>";
echo "<br>";
?>
</div>
</body>
</html>