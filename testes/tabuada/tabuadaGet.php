<?php

$numero = $_GET["numero"];
$multi = $_GET["multi"];

echo "Tabuada do " . $numero;
 
for( $i=1; $i < $multi+1; $i++){
    echo "</br>";
    echo $numero . " x " . $i . " = " . $numero * $i;
}