<?php
class Animal {
    // Propriedade
    public $name;
    public $weight;
    public $hunger;
    
    // Método construtor
    public function __construct($name,$weight,$hunger){
        $this->name = $name;
        $this->weight = $weight;
        $this->hunger = $hunger;
    }
    
    // Método
    public function whoIs(){
        return "The animal is: " . $this->name . " your weight is: " . $this->weight . " your current hunger: " . $this->hunger;
    }

    public function eat(){
        if ($this->hunger == 0){
            return "This animal is not hungry";
        }else{
            $this->hunger = $this->hunger -1;
            return $this->name . " fed and his hunger lessened to " . $this->hunger;
        }
    }
    
    public function weight(){
        if ($this->weight <= 10){
            return "The animal is small";
        }else if($this->weight <= 20){
            return "The animal is medio";
        }else{
            return "The animal is big";
        }
    }
}
// Criando um novo objeto da classe Animal e definindo o valor da propriedade
$animal1 = new Animal("Cachorro", 16,1);
$animal2 = new Animal("Pato", 4,4);
$animal3 = new Animal("Boi", 50,2);
$animal4 = new Animal("Tucano", 10,4);

// Chamando o método
echo $animal1->whoIs();
echo "</br>";
echo $animal2->whoIs();
echo "</br>";
echo $animal3->whoIs();
echo "</br>";
echo $animal1->eat();
echo "</br>";
echo $animal1->eat();

echo "</br>";
echo $animal1->weight();
echo "</br>";
echo $animal2->weight();
echo "</br>";
echo $animal3->weight();
echo "</br>";

var_dump($animal1);
echo "</br>";
var_dump($animal2);
echo "</br>";
print_r($animal1);