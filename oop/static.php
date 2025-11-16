<?php
class Counter {
 
    public static $count = 0;


    public function __construct() {
        self::$count++; 
    }


    public static function getCount() {
        return self::$count;
    }
}



echo "Initial count: " . Counter::getCount() . "\n"; 


$obj1 = new Counter();
echo "After 1 object: " . Counter::getCount() . "\n"; 

$obj2 = new Counter();
echo "After 2 objects: " . Counter::getCount() . "\n"; 


echo "From object: " . $obj1::getCount() . "\n"; 
?>