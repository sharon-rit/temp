<?php
// 1. Print "Hello World" using echo
echo "Hello World\n";

// 2. Print "Hello PHP" using a variable
$message = "Hello PHP";
echo $message . "\n";

// 3. Check student grade based on marks
$marks = 56; // Example marks, change as needed
if ($marks >= 60) {
    echo "Grade: First Division\n";
} elseif ($marks >= 45) {
    echo "Grade: Second Division\n";
} elseif ($marks >= 33) {
    echo "Grade: Third Division\n";
} else {
    echo "Grade: Fail\n";
}

// 4. Factorial program using for loop
$number = 5; // Example number, change as needed
$factorial = 1;
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
echo "Factorial of $number is $factorial\n";

// 5. Check whether a number is positive, negative, or zero
$number = -10; // Example number, change as needed
if ($number > 0) {
    echo "The number is positive\n";
} elseif ($number < 0) {
    echo "The number is negative\n";
} else {
    echo "The number is zero\n";
}

// 6. Add two numbers using variables
$num1 = 10; // Example number, change as needed
$num2 = 20; // Example number, change as needed
$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is $sum\n";

// 7. Find area of a triangle
$base = 10; // Example base, change as needed
$height = 5; // Example height, change as needed
$area = 0.5 * $base * $height;
echo "The area of the triangle is $area\n";

// 8. Check whether a given number is divisible by a given number N
$number = 25; // Example number, change as needed
$divisor = 5; // Example divisor, change as needed
if ($number % $divisor == 0) {
    echo "$number is divisible by $divisor\n";
} else {
    echo "$number is not divisible by $divisor\n";
}
?>
