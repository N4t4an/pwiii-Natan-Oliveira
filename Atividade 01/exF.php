<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F</title>
</head>
<body>
    
<form method="POST">

<label>Valor:</label>

<input type="number" name = "Val1" required>

<br><br>

<input type="submit" value = "Calcular">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$val1 = $_POST["Val1"];
$porcentagem = 0.07;

$total = $val1*$porcentagem;

$valortotal = $val1-$total;


echo "<br> Você possui 7% de desconto, o valor da compra é ", $val1 ,", o valor do desconto é de ", $total ,", e o do produto com desconto é ",$valortotal; 


}
?>

</body>
</html>
