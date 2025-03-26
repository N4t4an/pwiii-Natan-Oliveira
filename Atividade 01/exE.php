
<?php


$val1 = 89;
$val2 = 1.90;

$imc = $val1/($val2*$val2);

if ($imc <= 18.5){
    echo "<br> IMC: ", $imc ,", Você está abaixo do peso";
}

else if($imc > 18.5 && $imc <= 24.99){
    echo "<br> IMC: ", $imc ,", Seu peso está na média";
}

else if($imc > 25 && $imc <= 29.9){
    echo "<br> IMC: ", $imc ,",     Você está com sobrepeso";
}
else if($imc > 30 && $imc <= 34.9){
    echo "<br> IMC: ", $imc ,", Você está com obesidade Grau 1";
}
else if($imc > 35 && $imc <= 39.9){
    echo "<br> IMC: ", $imc ,", Você está com obesidade Grau 2";
}
else if ($imc > 40){
    echo "<br> IMC: ", $imc ,", Você está com obesidade Grau 3";
}
?>
