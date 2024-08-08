<?php

//Prefiro criar uma variável, acho mais prático
$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso / ($altura * $altura) ;

echo "Seu imc foi " . $imc;
echo "</br>";

if($imc < 17){
    echo "Você está muito abaixo do peso";
}else if($imc >= 17 && $imc <= 18.4){
    echo "Você está abaixo do peso";
}else if($imc >= 18.5 && $imc <= 24.9){
    echo "Você está com o peso normal";
}else if($imc >= 25 && $imc <= 29.9){
    echo "Você está acima do peso";
}else if($imc >= 30 && $imc <=34.9){
    echo "Você está com obesidade nível I";
}else if($imc >=35 && $imc <=40){
    echo "Você está com obesidade nível II";
}else{
    echo "Você está com obesidade nível III";
}
?>
<br><br>
<a style="text-decoration: none; border:1px solid black; background-color:yellow; padding:2px;" href="form.php">Voltar para a página anterior</a>