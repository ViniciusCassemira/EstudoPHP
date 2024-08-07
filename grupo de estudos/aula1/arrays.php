<?php
echo "<h3>sou um array</h3>";

$tipos = ['php',True,12,1.2,'python'];

echo $tipos[0]; /*mostra na primeira posição do array, 1º posição = 0*/
$tipos[] = 'c++'; /*adicionando item ao array*/
echo "<br>";
echo var_dump($tipos); /*não sei explicar ainda mas aparentemente lista com detalhes*/