<?php
//tipos de variáveis no php:
//locais -> está dentro de uma função
//globais -> será acessada apartir da linha que foi declarada
//super globais -> acessada por toda a aplicação

$primeiroNumero = 10;

$segundoNumero = 7;

$resultado = $primeiroNumero + $segundoNumero ;

//echo $resultado; (mostra o valor da variável)

var_dump($resultado); //mostra o valor e o tipo da variável

echo "<hr />";

$nome = "Antonio";

var_dump($nome);


// necessário fechar se fosse utilizar junto com um arquivo html, por exemplo?>