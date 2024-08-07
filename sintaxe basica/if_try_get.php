<?php

try{

    if (!empty($_GET["language"])){

        if(strlen($_GET["language"]) < 3){
        throw new Exception("The language must to be 3 or more letters");
        }
    } 
    else{
        throw new Exception("Language not found or null");
    }

    if (!empty($_GET["age"])){
        if($_GET["age"] <1){
            throw new Exception("you need to be 1 or more years old");
        }
    } else{
        throw new Exception("Age not found or null");
    }

    $language = $_GET["language"];
    $age = $_GET["age"];

    echo "successful access";

    echo "Your language: " . $language . " / your age: " . $age;
}
catch(Exception $e){
    echo "Error: " . $e->getMessage();
}