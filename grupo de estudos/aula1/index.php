<?php

echo '<h1> hello world</h1>';

$numero = 2;

echo $numero . "<br>";

echo var_dump($numero) . "<br>";

$numero = $numero + 1;

echo "Variável acima somada com 1 = " . $numero . "<br>";

function teste(){
    $var_global = "sou local";
}

echo "<h3>Estrutura de decisão simples</h3>";
$linguagem = "php";

//se
if($linguagem == "js"){
   echo "Você escolheu javascript";
} else{
    echo "Você escolheu outra linguagem sem ser js";
}

echo "<br>";

//                     e
if($linguagem == "php" && $numero > 2){
    echo "Você escolheu o php e o número é maior do que 2";
}

echo "<br>";

//                     ou
if($linguagem == "php" || $linguagem == "c#" ){
    echo "você escolheu as melhores linguagens";
}

echo "<br>";

echo ($linguagem == "php")
        ? "você escolheu o php"
        : "você não escolheu php";


echo "<br>";

include 'arrays.php';