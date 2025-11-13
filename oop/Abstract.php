<?php 
abstract class Shape {
    
    abstract public function area();

    public function getDescription() {
        return "Shape";
    }
} 

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }


    public function area() {
        return pi() * $this->radius * $this->radius;
    }

    public function getDescription() {
        return "Circle";
    }
}

$circle = new Circle(5); 