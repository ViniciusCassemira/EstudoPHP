<?php

$number = 2;
$language = "portuguese";

if ($language == "english" || $language == "spanish"){
    echo "you speak english or spanish";
}

if ($language == "portuguese" && $number >=2){
    echo "you speak Portuguese and the number is equal to or greater than 2";
}

echo ($language == "japanese")
    ? "do you choice japanese"
    : "you dont choice japanese";

echo "entrou";