<?php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
 
    public function __toString() {
        return "Person: " . $this->name;
    }
}

$person = new Person("Fatin");


echo $person; 


$message = "Hello, " . $person;
echo $message;
?>