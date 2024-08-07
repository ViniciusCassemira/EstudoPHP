<?php

try{

if (!empty($_GET["parametro1"]))
{
    if(strlen($_GET["parametro1"]) < 3)
        throw new Exception("o valor do parametro 1 precisa ser maior do que 3 caracteres.");
} else {
    throw new Exception("parametro 1 vazio ou inexistente.");
}
    

if (empty($_GET["parametro2"]))
    throw new Exception("Nenhum valor para parâmetro 2");

$nome = $_GET["parametro1"]; 
$idade = (int) $_GET["parametro2"];

$frase  = "Olá, eu me chamo " . $nome;
$frase .= " e tenho " . $idade ." anos.";

echo $frase;

} catch(Exception $e) {
    echo$e->getMessage();
}