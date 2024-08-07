<?php

$i = 0;
$j = 0;

while ($i != 1){
echo "condição falsa";
echo "</br>";
$j += 1;

if ($j == 5){
    echo "j igual a 5" ."</br>";
    $i++;
    echo "i recebeu +1" ."</br>"; 
}
}

echo "saiu do loop";