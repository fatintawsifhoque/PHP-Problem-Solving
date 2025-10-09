<?php
/*Problem -> 1 => Even or Odd Classifier
Write a PHP script that uses a for loop to iterate through numbers from 1 to 20. For each number, use an if...else statement to determine whether it is even or odd, and print a message.*/
function EvenOrOdd()
{
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 === 0) {
            echo " $i - Even.";
        } else {
            echo "$i - Odd.";
        }
    }
}
EvenOrOdd();

/*Problem -> 2 => Multiples of 3 or 5
Using a for loop, print all numbers from 1 to 50 that are divisible by 3 or 5. If a number is divisible by both (e.g., 15, 30), print it only once. Do not print numbers that are not divisible by either.*/
function multipleOf3Or5()
{
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            echo "$i \n";
        }
    }
}
multipleOf3Or5();

/*Problem -> 3 => Factorial with Input Validation
Ask the user for a number $n (you can hardcode it for testing, e.g., $n = 5).

If $n is negative, print: "Factorial is only defined for non-negative integers."
If $n is 0 or positive, calculate its factorial using a for loop and print the result.
Example:*/
function factorial($n)
{
    if (0 > $n) {
        echo "Factorial is only defined for non-negative integers.";
        return;
    }
    $factorial = 1;
    for ($i = $n; $i >= 1; $i--) {
        $factorial *= $i;
    }
    echo $factorial;
}
factorial(5);

/*Problem -> 4 => Prime Number Finder (1 to n)
Use a for loop to check every number from 1 to n. For each number, use nested loops and if...else logic to determine if it is a prime number. */
function primeNumber($limit) {
    for ($num = 2; $num <= $limit; $num++) {
        $isPrime = true;
        
    
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        
        if ($isPrime) {
            echo "$num is prime<br>";
        }
    }
}

primeNumber(30);

/*Problem -> 5 => Conditional Star-Hash Pattern
Print a right-angled triangle pattern with n rows using a for loop.

On odd-numbered rows (1st, 3rd, 5th...), print *
On even-numbered rows (2nd, 4th...), print #*/
function starHash($limit){
 for ($i = 1; $i <= $limit; $i++) {
        if ($i % 2 == 1) { 
            echo str_repeat("*", $i) . "<br>";
        } else { 
            echo str_repeat("#", $i) . "<br>";
        }
    }
}
starHash(5);
