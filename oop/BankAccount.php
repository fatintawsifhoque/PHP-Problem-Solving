<?php
class BankAccount{
    private $balance;
    public function deposite ($amount){
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            echo "Deposit amount must be positive!<br>";
        }
    }
    public function balanceShow(){
        return $this->balance;
    }
}

$account = new BankAccount();


$account->deposite(1000);
$account->deposite(-500); 


echo "Current balance: $" . $account->balanceShow();