<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G</title>
</head>
<body>
    
<h1>Calculadora de Volume - Caixa Retangular </h1>
<br>
<form method="POST">

<label>Largura:</label>

<input type="number" name = "Val1" required>

<br><br>

<label >Altura:</label>

<input type="number" name = "Val2" required>

<br><br>

<label >Comprimento:</label>

<input type="number" name = "Val3" required>

<br><br>
<input type="submit" value = "Calcule :) ">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$val1 = $_POST["Val1"];
$val2 = $_POST["Val2"];
$val3 = $_POST["Val3"];


$volume = $val1*$val2*$val2;

echo "<br> Volume: ", $volume; 


}
?>

</body>
</html>
