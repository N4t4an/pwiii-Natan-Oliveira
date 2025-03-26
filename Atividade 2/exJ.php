<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J</title>
</head>
<body>
    
<h1>Calculadora - Distancia Percorrida</h1>

<form method="POST">

<label>km:</label>

<input type="number" name = "Val1" required>

<br><br>

<label >Gasolina:</label>

<input type="number" name = "Val2" required>

<br><br>

<input type="submit" value = "Calcula pfv '-'">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$val1 = $_POST["Val1"];
$val2 = $_POST["Val2"];

$total = $val1+$val2;

 
echo "<br> A distancia percorrida é de ", $total,"km"; 

}
?>

</body>
</html>

