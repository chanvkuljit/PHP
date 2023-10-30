<?php

$a = 10;
$b = 4;
echo "Arithmetic Operators:\n";
echo "Addition: " . ($a + $b) . "\n";
echo "Subtraction: " . ($a - $b) . "\n";
echo "Multiplication: " . ($a * $b) . "\n";
echo "Division: " . ($a / $b) . "\n";
echo "Modulus: " . ($a % $b) . "\n";


echo "Assignment Operators:\n";
$x = 5;
echo "Original Value of x: " . $x . "\n";
$x += 3;
echo "Value of x after x += 3: " . $x . "\n";
$x -= 2;
echo "Value of x after x -= 2: " . $x . "\n";
$x *= 4;
echo "Value of x after x *= 4: " . $x . "\n";
$x /= 2;
echo "Value of x after x /= 2: " . $x . "\n";


echo "Comparison Operators:\n";
$p = 10;
$q = 5;
echo "Is p equal to q? " . ($p == $q) . "\n";
echo "Is p not equal to q? " . ($p != $q) . "\n";
echo "Is p greater than q? " . ($p > $q) . "\n";
echo "Is p less than q? " . ($p < $q) . "\n";
echo "Is p greater than or equal to q? " . ($p >= $q) . "\n";
echo "Is p less than or equal to q? " . ($p <= $q) . "\n";


echo "Logical Operators:\n";
$m = true;
$n = false;
echo "m AND n: " . ($m && $n) . "\n";
echo "m OR n: " . ($m || $n) . "\n";
echo "NOT m: " . (!$m) . "\n";


echo "Increment/Decrement Operators:\n";
$counter = 5;
echo "Original Value of Counter: " . $counter . "\n";
$counter++;
echo "Value of Counter after Increment: " . $counter . "\n";
$counter--;
echo "Value of Counter after Decrement: " . $counter . "\n";
?>

