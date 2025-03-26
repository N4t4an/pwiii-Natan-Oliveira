<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B</title>
</head>
<body>
    
<form method="POST">

<label>Valor:</label>

<input type="number" name = "Val1" required>

<br><br>

<input type="submit" value = "Calcule">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$val1 = $_POST["Val1"];
$porcentagem = 0.15;

$total = $val1*$porcentagem;

echo "<br> 15% de ", $val1 ," é ",$total; 

}
?>

</body>
</html>