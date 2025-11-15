<?php 
trait logable{
    protected $logFile = 'app.log';

    public function log($message){
        $timestamp = date('Y-m-d H:i:s');
        $logEntry = "[$timestamp] $message\n";
        file_put_contents($this->logFile, $logEntry, FILE_APPEND);
    }
}

class User {
    use logable; 

    private $name;

    public function __construct($name) {
        $this->name = $name;
        $this->log("User created: $name");
    }
}
class Product {
    use logable;

    private $name;

    public function __construct($name) {
        $this->name = $name;
        $this->log("Product created: $name");
    }
}

$user = new User("Fatin");
$product = new Product("Laptop");

echo "Logs have been written to app.log!";