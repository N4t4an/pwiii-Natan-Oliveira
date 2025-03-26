<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C</title>
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
$porcentagem = 0.05;
$outraporcentagem = 0.5;

$total = $val1*$porcentagem;
$totaldnv = $val1*$outraporcentagem;

echo "<br> 5% de ", $val1 ," é ",$total; 
echo "<br> 50% de ", $val1 ," é ",$totaldnv; 

}
?>

</body>
</html>



