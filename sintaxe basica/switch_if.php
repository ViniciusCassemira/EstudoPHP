<?php

//pode não ser a forma mais inteligente de se testar mas eu não ligo

$numero1 = 0;
$numero2 = 2;
$soma = $numero1 + $numero2;

switch($soma)
{
    case 0:
        echo "a soma foi 0 ";
    break;

    case 1:
        echo "a soma foi 1 ";
    break;
    
    case -1:
        echo "a soma foi -1 ";
    break;

    default:
        echo "Error :/ ";
    break;
}  

echo "</br>";

if ($soma > 0) {
    echo "A soma foi maior do que 0";
} else if ($soma == 0){
    echo "A soma foi igual a 0";
} else {
    echo "A soma foi menor do que 0";
}