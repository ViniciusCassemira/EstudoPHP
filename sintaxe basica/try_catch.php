<?php

$opcaoMenu = -1;

try{
    
    if($opcaoMenu < 0){
        throw new Exception("Opcão menor do que 0");
    }
    else if ($opcaoMenu == 0){
        throw new Exception("Opção foi igual a 0");
    }
    else{
        throw new Exception("Opção maior do que 0");
    }
}

catch(Exception $e){
    echo "Excessão disparada: ". $e-> getMessage();
}