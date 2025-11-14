<?php
interface Flyable{
   public function fly();
};
class Bird implements Flyable{
private $name;

public function __construct($name)

{
    $this->name = $name;
}
public function fly(){
    return $this->name . " is flying.";
}
}

$sparrow = new Bird("Sparrow");
echo $sparrow-> fly();