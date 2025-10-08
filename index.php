<?php
/*Problem -> 1 => Even or Odd Classifier
Write a PHP script that uses a for loop to iterate through numbers from 1 to 20. For each number, use an if...else statement to determine whether it is even or odd, and print a message.*/
function EvenOrOdd(){
for($i =1;$i<=20;$i++){
    if($i%2 ===0){
        echo " $i - Even.";
    }
    else{
        echo "$i - Odd.";
    }
}
}
EvenOrOdd();

/*Problem -> 2 => Multiples of 3 or 5
Using a for loop, print all numbers from 1 to 50 that are divisible by 3 or 5. If a number is divisible by both (e.g., 15, 30), print it only once. Do not print numbers that are not divisible by either.*/
function multipleOf3Or5(){
    for($i =1;$i<=50;$i++){
        if($i%3 ==0 || $i %5 ==0){
            echo "$i \n";
        }
    }
}
multipleOf3Or5();