<?php
// Numeric array for days of the week
$daysOfWeek = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

// Associative array for months and their corresponding days
$months = array(
    "January" => 31,
    "February" => 28, // Assuming it's not a leap year
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

// Multidimensional array for laptops
$laptops = array(
    array("company" => "Dell", "model" => "Inspiron", "price" => 800),
    array("company" => "HP", "model" => "Pavilion", "price" => 700)
);

// Printing the arrays
echo "Numeric array for days of the week: \n";
print_r($daysOfWeek);
echo "\n";

echo "Associative array for months and their corresponding days: \n";
print_r($months);
echo "\n";

echo "Multidimensional array for laptops: \n";
print_r($laptops);
echo "\n";
?>
