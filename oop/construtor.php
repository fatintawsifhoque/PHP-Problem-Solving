<?php 
class Person{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this ->age = $age;
    }

    public function output(){
        return "Hi, I am $this->name, $this->age years old.";
    }
}

$person1 = new Person("Fatin", 22);
echo $person1->output();