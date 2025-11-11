<?php 
class animal{
    public function makeSound(){
        return "sound";
    }
}

class dog extends animal{
    public function makeSound(){
        return "woof";
    }
}

class cat extends animal{
    public function makeSound(){
        return "meow";
    }
}

$dog = new Dog();
$cat = new Cat();

echo $dog->makeSound() . "<br>"; 
echo $cat->makeSound();          
?>