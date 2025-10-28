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
echo "<br> <br>";
/*Problem -> 13 => Number Classifier
Make a PHP script that checks a number. First, check if the number is positive or negative. Then, check if the number is even or odd.

Take input or define variable

Show output like: "The number -4 is Negative and Even".*/
function numberClassifier($num){
    $posOrNeg = "";
    if($num>0){
        $posOrNeg = "Posivie";
    }
    elseif($num<0){
        $posOrNeg = "Negative";
    }
    else{
        $posOrNeg = "Zero";
    }
    $evenOrOdd = "";
    if($num%2 ==0){
        $evenOrOdd = "Even";
    }
    else{
        $evenOrOdd = "Odd";
    }
    echo "The number {$num} is {$posOrNeg} and {$evenOrOdd}";
}
numberClassifier(-4);
echo "<br> <br>";
/*Problem -> 14 => Temperature Converter
Make a PHP script that takes temperature input or static variable and converts it between Celsius and Fahrenheit.

Celsius to Fahrenheit: (celsius * 9/5) + 32

Fahrenheit to Celsius: (fahrenheit - 32) * 5/9*/
function temperatureConverter($tem, $unit){
    $unit = strtolower($unit);
    if($unit ==="c"){
        echo ($tem * 9/5) + 32 . "f";
    }
    else{
        echo ($tem - 32)* 5/9 . "c";
    }
}
temperatureConverter(25,"c");
echo "<br> <br>";
/*Problem -> 15 => Basic Auth System
Create a PHP script with a hardcoded username and password.

Set variables like $username = "admin" and $password = "1234".

Create another sets of variable with inputUsername and inputPassword.

Check if both match, show "Login Successful", otherwise show "Invalid username or password".*/
function basicAuthSystem($user,$pass){
    if($user === "admin" && $pass ==="1234"){
        echo "Login Successful";
    }
    else{
        echo "Invalid username or password";
    }
}
basicAuthSystem("admin",1234);
echo "<br> <br>";
/*Problem -> 16 => Print Numbers 1 to 10 Using while
Write a script that uses a while loop to print numbers from 1 to 10, each on a new line.*/
function printNumbers(){
    $i = 1;
    while($i<=10){
        echo $i. "<br>";
        $i++;
    }
}
printNumbers();
echo "<br> <br>";
/*Problem -> 17 => Countdown from 10 to 1
Use a while loop to print a countdown from 10 to 1.
After printing 1, print "Blast off!".*/
function countdown() {
    $i = 10;
    while ($i >= 1) {
        echo $i . "<br>";
        $i--;
    }
    echo "Blast off!"; 
}
countdown();
echo "<br> <br>";
/*Problem -> 18 => Sum of First N Natural Numbers
Write a function sumWhile($n) that calculates the sum of numbers from 1 to $n using a while loop.
Print the result like: Sum = 55 (if $n = 10).*/
function sumWhile($n){
    $sum = 0;
    $i = 1;
    while($i<=$n){
        $sum += $i;
        $i++;
    }
    echo $sum;
}
sumWhile(10);
echo "<br> <br>";
/*Problem -> 19 => Find the First Multiple of 7 Greater Than 50
Use a while loop to find the smallest number greater than 50 that is divisible by 7.
Print that number.*/
function multiplyOf7GreaterThan50() {
    $i = 51; 
    while (true) { 
        if ($i % 7 == 0) {
            echo $i;
            break; 
        }
        $i++;
    }
}
multiplyOf7GreaterThan50();
echo "<br> <br>";
/*Problem -> 20 => Countdown from 10 to 1
Use a while loop to print a countdown from 10 to 1.
After printing 1, print "Blast off!".*/

function simulateLoop() {
    $input = "go"; 
    
    while ($input != "stop") {
        echo "Running...<br>"; 
        $input = "stop";       
    }
}
simulateLoop();
echo "<br> <br>";
/*Problem -> 21 => Print Numbers 1 to 10 Using while*/
function print1To10While(){
    $i = 1;
    while($i<=10){
        echo $i . "<br>";
        $i++;
    }
}
print1To10While();
echo "<br> <br>";
/*Problem -> 22 => Print All Items*/
function printAllItems($arr){
    foreach($arr as $item){
        echo $item . "<br>";
    }
}
printAllItems(["apple", "banana", "mango", "orange"]);
echo "<br> <br>";
/*Problem -> 23 => Sum of Numbers */
function sumOfNums($arr){
    $sum = 0;
    foreach($arr as $num){
        $sum += $num;
    }
    echo $sum;
}
sumOfNums([5, 10, 15, 20]);
echo "<br> <br>";
/*Problem -> 24 => Find the Largest Number */
function findLargest($arr){
    $largest = $arr[0];
    foreach($arr as $item){
        if($item>$largest){
            $largest = $item;
        }
    }
    echo $largest;
}
findLargest([34, 12, 89, 56, 23]);
echo "<br> <br>";
/*Problem -> 25 => Greet Names */
function greetNames($names){
    foreach($names as $name){
        echo "Hello {$name}!" . "<br>";
    }
}
greetNames(["Rahim", "Karim", "Sara"]);
echo "<br> <br>";
/*Problem -> 25 => Even or Odd */
function EvenOrOddArr($arr) {
    foreach ($arr as $el) {
        if ($el % 2 == 0) {
            echo "$el is even<br>";
        } else {
            echo "$el is odd<br>";
        }
    }
}
EvenOrOddArr([2, 7, 4, 9, 12]);
echo "<br> <br>";
/*Problem -> 26 => Print Each Word in Uppercase */
function printToUpper($arr){
    foreach($arr as $el){
        echo strtoupper($el);
    }
}
printToUpper(["hello", "world"]);
echo "<br> <br>";
/*Problem -> 27 => Simple Greeting
Write a function greet() that prints "Welcome to PHP!" when called. */
function greet(){
    echo "Welcome to PHP!";
}
greet();
echo "<br> <br>";
/*Problem -> 28 =>  Add Two Numbers
Write a function sum($a, $b) that returns the sum of two numbers. */
function sum($a,$b){
    $sum = $a + $b;
return $sum;
}
echo sum(10,20);
echo "<br> <br>";
/*Problem -> 29 => Default Greeting*/
function defaultGreeting($name = "User"){
    echo "Hello $name";
}
defaultGreeting("Fatin");
echo "<br> <br>";
/*Problem -> 30 => Find Maximum */
function findMaximum($a,$b,$c){
   if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}
echo findMaximum(10,20,30);
echo "<br> <br>";
/*Problem -> 31 => Sum with Default Array */
function sumArray($arr){
    return array_sum($arr);
}
echo sumArray([1, 2, 3]);
echo "<br> <br>";
/*Problem -> 32 => Filter Even Numbers
Write a function getEvenNumbers($arr) that:

Takes an array of numbers
Returns a new array containing only the even numbers
Do NOT use array_filter() or any built-in function
Use only foreach and if */
function getEvenNumbers($arr){
    $even=[];
    foreach($arr as $item){
        if($item % 2 ==0){
            array_push($even,$item);
        }
    }
    return $even;
}
 print_r(getEvenNumbers([1, 2, 3, 4, 5, 6]));
 echo "<br> <br>";
/*Problem -> 33 => Max of Evens সমাধান করুন:

দুটি ফাংশন লিখুন:
isEven($n) → true/false রিটার্ন করবে
maxEven($arr) → অ্যারের সবচেয়ে বড় জোড় সংখ্যা রিটার্ন করবে (যদি না থাকে, null রিটার্ন করবে) */
function maxOfEvens($arr) {
    $evArr = [];
    $maxE = null;
    
    foreach ($arr as $it) {
        if ($it % 2 == 0) {
            $evArr[] = $it;
        }
    }

    foreach ($evArr as $i) {
        if ($maxE === null || $i > $maxE) {
            $maxE = $i;
        }
    }
    
    return $maxE; 
}

var_dump(maxOfEvens([1, 2, 3, 4, 5, 6])); 
var_dump(maxOfEvens([1, 3, 5]));     
   echo "<br> <br>";
/*Problem -> 34 => Find the Smallest Number in an Array
Write a function findMin($arr) that:
Takes an array of numbers
Returns the smallest number
Do not use min() or any built-in function */
function findSmallestNumArr($arr){
    $small =$arr[0];
    foreach($arr as $it){
        if($small>$it){
            $small = $it;
        }
    }
    return $small;
}
findSmallestNumArr([10, 3, 7, 1, 9]);
echo "<br> <br>";
/*Problem -> 35 => Reverse an Array (Without Built-in Functions) */
function reverseArr($arr){
    $reverseArr =[];
    $revIn =count($arr)-1;
    while($revIn>=0){
        $reverseArr[] = $arr[$revIn];
        $revIn--;
    }
    return $reverseArr;
}
print_r(reverseArr([1, 2, 3, 4]));
echo "<br> <br>";
/*Problem -> 36 => Count Occurrences of a Number
সমস্যা:
Write a function countOccurrences($arr, $target) that counts how many times $target appears in $arr. */
function countOccu($arr, $t){
    $count = 0;
    foreach($arr as $it){
        if($it == $t){
            $count++;
        }
    }
    return $count;
}
countOccu([10, 3, 7, 1, 9], 3);
echo "<br> <br>";
/*Problem -> 37 => Check if Array is Sorted
Write a function isSorted($arr) that:

Returns true if the array is in ascending order
Returns false otherwise */
function isSorted($arr) {
    $prev = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $prev) {
            return false;
        }
        $prev = $arr[$i];
    }
    return true; 
}

var_dump(isSorted([1, 2, 3, 4])); 
var_dump(isSorted([1, 3, 2, 4])); 
echo "<br> <br>";
/*Problem -> 38 => Remove Duplicates */
function removeDuplicates($arr) {
    $unique = [];
   foreach ($arr as $item) {
        $found = false; 
        
        foreach ($unique as $u) {
            if ($u == $item) {
                $found = true;
                break; 
            }
        }
        if (!$found) {
            $unique[] = $item;
        }
    }
    
    return $unique;
}
print_r(removeDuplicates([1, 2, 2, 3, 3, 4])); // [1, 2, 3, 4]