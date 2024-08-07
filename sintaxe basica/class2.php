<?php

class Aluno{
    public $name;
    public $age;

    // public function __construct($a, $b){
    //     $this->name = $a;
    //     $this->age = $b;
    // }


    public function information($e){
        return "Name: " . $this->name . "Age: " . $this->age . "  dobro da sua idade: " . $e*$this->age;
    }

    public function permission(){
        if($this->age >= 18){
            return "Access successful";
        }
        else{
            return "Access denied";
        }
    }
}
// $aluno1 = new Aluno("Jonatan",18);

$aluno1 = new Aluno();
$aluno1->name="Vinícius";
$aluno1->age=17;

echo "Nome: " . $aluno1->name;
echo "</br>";
echo "idade: " . $aluno1->age;
echo $aluno1->information(2);
echo "</br>";
echo $aluno1->permission();