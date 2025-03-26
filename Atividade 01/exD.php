<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D</title>
</head>
<body>
    
<form method="POST">

<label>Valor:</label>

<input type="number" name = "Val1" required>

<br><br>

<label >Valor 2:</label>

<input type="number" name = "Val2" required>

<br><br>

<input type="submit" value = "Calcular">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$val1 = $_POST["Val1"];
$val2 = $_POST["Val2"];

$q1 = $val1*$val1;
$q2 = $val2*$val2;

$total = $q1+$q2;

echo "<br> O valor ", $val1 ," ao quadrado é: ",$q1; 
echo "<br> O valor", $val2 ," ao quadrado é: ",$q2; 
echo "<br> A soma de ambos é: ", $total; 

}
?>

</body>
</html>
