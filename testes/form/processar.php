<?php

echo "Welcome " . $_POST["name"] . "</br>";

if ( $_POST["gender"] == "male"){
    echo "you're a man";
}
else{
    echo "you're a woman";
}