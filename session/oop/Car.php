<?php
class Car
{
    public $color;
    public $brand;

    public function start(){
        return "The $this->brand is starting";
    }
}
$myCar = new Car;
$myCar->color = 'green';
$myCar->brand = 'Runner';

echo "My car is $myCar->color $myCar->brand";
echo $myCar->start();