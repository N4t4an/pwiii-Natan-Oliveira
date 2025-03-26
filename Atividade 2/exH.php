<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H</title>
</head>
<body>
    
<h1>Calculadora - 27% de Desconto: </h1>
<br>
<form method="POST">

<label>Valor:</label>

<input type="number" name = "Val1" required>

<br><br>

<input type="submit" value = "Calcula ai man :D">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$val1 = $_POST["Val1"];
$porcentagem = 0.27;


$total = $val1*$porcentagem;


echo "<br> 27% de ", $val1 ," é ",$total; 


}
?>

</body>
</html>