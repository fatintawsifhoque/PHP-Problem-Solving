<?php
class Vehicle {
    
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }
    public function startEngine() {
        return "Engine started for $this->brand";
    }
}


class Car extends Vehicle {
    
    public function __construct($brand) {
        parent::__construct($brand); 
    }

    public function honk() {
        return "Beep beep!";
    }
}

$myCar = new Car("Toyota");

echo $myCar->startEngine() . "<br>"; 

echo $myCar->honk();