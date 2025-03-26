<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I</title>
</head>
<body>
    
<h1>Calculadora - Parcelas: </h1>
<br>
<form method="POST">

<label>Valor:</label>

<input type="number" name = "Val1" required>

<br><br>

<input type="submit" value = "Calcular">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$val1 = $_POST["Val1"];
$porcentagem = 0.16;

$au = $val1*$porcentagem;
$total = $val1+$au;
$parcela = $total/10;


echo "<br> Valor aumentado em 16%: ", $total ," Valor parcelado em 10 vezes: ",$parcela; 


}
?>

</body>
</html>