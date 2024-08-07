<?php

function sum($num1, $num2){
    return "entrou na função " . $num1 + $num2;
}

echo sum(3,4) . "</br>";
$result = sum(3,5);
echo $result . "</br>";

//---------------------------------------------------------
//-------------------another function ---------------------
//---------------------------------------------------------

function div($num){
    return $num / 2;
}

echo div(5);
echo "</br>";

$div = div(5);

if ($div < 0){
    echo "result less than 0";
}
else if($div > 0){
    echo "result more than 0";
}else{
    echo "null result or equal to 0";
}

//---------------------------------------------------------
//-------------------another function ---------------------
//---------------------------------------------------------

function number($number){
    if($number < 0){
        return "Negative";
    }
    elseif($number > 0){
        return "Positive";
    }
    else{
        return "Null or zero";
    }
}

echo "</br>";
echo number(1);
echo "</br>";
echo number(0);
echo "</br>";
echo number(-3);