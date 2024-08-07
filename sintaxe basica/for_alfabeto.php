<?php

$number = 2;

$letters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

echo $letters[$number];
echo "</br>";

for ($i=0; $i < $number; $i++){
    echo $i . " - ".$letters[$i];
    echo "</br>";
}