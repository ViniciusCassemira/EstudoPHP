<?php

echo "Tabuada do " . $_GET["numero"];
echo "</br>";

for($i=1; $i < $_GET["multi"]+1; $i++){
    echo $_GET["numero"] . " x " .$i." = " . $_GET["numero"] * $i;
    echo "</br>";
}
?>

<a style="text-decoration: none;" href="tabuada2.php">Voltar</a>
