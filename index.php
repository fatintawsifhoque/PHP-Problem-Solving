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
echo "<br> <br>";
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
echo "<br> <br>";
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
echo "<br> <br>";
/*Problem -> 4 => Prime Number Finder (1 to n)
Use a for loop to check every number from 1 to n. For each number, use nested loops and if...else logic to determine if it is a prime number. */
function primeNumber($limit)
{
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
echo "<br> <br>";
/*Problem -> 5 => Conditional Star-Hash Pattern
Print a right-angled triangle pattern with n rows using a for loop.

On odd-numbered rows (1st, 3rd, 5th...), print *
On even-numbered rows (2nd, 4th...), print #*/
function starHash($limit)
{
    for ($i = 1; $i <= $limit; $i++) {
        if ($i % 2 == 1) {
            echo str_repeat("*", $i) . "<br>";
        } else {
            echo str_repeat("#", $i) . "<br>";
        }
    }
}
starHash(5);
echo "<br> <br>";
/*Problem -> 6 => Sum of Even Numbers
Write a PHP script that uses a for loop to calculate the sum of all even numbers from 1 to 100. Use an if statement to check if a number is even. Print the final sum.*/
function sumOfEvenNum($n){
    $sum =0;
    for($i = 2;$i<=$n;$i+=2){
        $sum+=$i;
    }
    echo $sum;
}
sumOfEvenNum(100);
echo "<br> <br>";
/*Problem -> 7 => Find the Largest Number in a Range with Condition
Iterate from 100 to 200 using a for loop.
For each number, check if it is divisible by 7 but not by 5.
Among all such numbers, find and print the largest one.*/
function largestNum($from, $to){
    $largest =null;
    for($i = $from;$i<=$to;$i++){
        if($i % 7 == 0 && $i % 5 !==0){
            if($largest<$i){
                $largest =$i;
            }
        }
    }
    echo $largest;
}
largestNum(100,200);
echo "<br> <br>";
/*Problem -> 8 => Pattern with Numbers and Conditions
Print a pattern of 5 lines using a for loop.

On odd lines (1st, 3rd, 5th), print the line number repeated that many times (e.g., line 3 → 333).
On even lines (2nd, 4th), print the word "SKIP".*/
function patternWithNumAndCond() {
    for ($i = 1; $i <= 5; $i++) {
        if ($i % 2 == 0) {
            echo "SKIP<br>";
        } else {
            for ($j = 1; $j <= $i; $j++) {
                echo $i;
            }
            echo "<br>";
        }
    }
}

patternWithNumAndCond();
echo "<br> <br>";
/*Problem -> 9 => Count Vowels in a Fixed String Using Loop
Define a string: $text = "The quick brown fox jumps over the lazy dog";
Use a for loop to go through each character of the string.
Use if...else (or nested if) to check if the character is a vowel (a, e, i, o, u — case-insensitive).*/
function countVowel($str){
    $str = strtolower($str);
    $count = 0;
    for($i = 0; $i<strlen($str);$i++){
        if($str[$i] == "a" || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "o" || $str[$i] == "u"){
            $count++;
        }
    }
    echo $count;
}
countVowel("The quick brown fox jumps over the lazy dog");
echo "<br> <br>";
/*Problem -> 10 => Print Only Multiples of 4
Write a for loop from 1 to 40.
Print only the numbers that are divisible by 4.
Each number on a new line.*/
function multiplyOf4(){
    for($i = 1; $i<=10;$i++){
        echo $i*4 . "<br>";
    }
}
multiplyOf4();
echo "<br> <br>";
/*Problem -> 11 => "Hello" for Even, "World" for Odd
Use a for loop from 1 to 5.

If the number is even, print "Hello"
If odd, print "World"*/
function print1to5(){
    for($i = 1;$i<=5;$i++){
        if($i%2 ==0){
            echo "Hello" . "<br>";
        }
        else{
            echo "World". "<br>";
        }
    }
}
print1to5();
echo "<br> <br>";
/*Problem -> 12 => Print Squares of Numbers 1 to 5
Use a for loop from 1 to 5.
For each number, print its square (number × number).*/
function printsquare(){
    for($i = 1;$i<=5;$i++){
        echo $i*$i . "<br>";
    }
}
printsquare();