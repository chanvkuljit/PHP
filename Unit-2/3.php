<?php
// a. array_change_key_case
$originalArray = array("FirstName" => "John", "LastName" => "Doe", "Age" => 30);
echo "Original Array:\n";
print_r($originalArray);
echo "\n";

$lowerCaseArray = array_change_key_case($originalArray, CASE_LOWER);
echo "Array after changing keys to lowercase:\n";
print_r($lowerCaseArray);
echo "\n";

$upperCaseArray = array_change_key_case($originalArray, CASE_UPPER);
echo "Array after changing keys to uppercase:\n";
print_r($upperCaseArray);
echo "\n";

// b. array_chunk
$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$chunkedMonths = array_chunk($months, 4);
echo "Array of months after chunking:\n";
print_r($chunkedMonths);
echo "\n";

// c. array_count_values
$sampleArray = array(1, "hello", 1, "world", "hello");
$valueCounts = array_count_values($sampleArray);
echo "Counts of each value in the array:\n";
print_r($valueCounts);
echo "\n";

// d. array_combine
$keys = array("a", "b", "c");
$values = array(1, 2, 3);
$combinedArray = array_combine($keys, $values);
echo "Combined Array:\n";
print_r($combinedArray);
echo "\n";

// e. array_pop
$stack = array("orange", "banana", "apple", "raspberry");
$removedElement = array_pop($stack);
echo "Popped element from the stack: " . $removedElement . "\n";
print_r($stack);
echo "\n";

// f. array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
echo "Stack after pushing elements: \n";
print_r($stack);
echo "\n";

// g. array_unshift
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
echo "Queue after unshifting elements: \n";
print_r($queue);
echo "\n";

// h. array_shift
$queue = array("apple", "raspberry", "orange", "banana");
$removedElement = array_shift($queue);
echo "Shifted element from the queue: " . $removedElement . "\n";
print_r($queue);
echo "\n";
?>
