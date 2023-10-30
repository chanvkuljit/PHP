<?php
// a. strlen
$string = "This is a sample string.";
$length = strlen($string);
echo "Length of the string: " . $length . "\n\n";

// b. strpos
$position = strpos($string, "sample");
if ($position !== false) {
    echo "Position of 'sample' in the string: " . $position . "\n\n";
} else {
    echo "'sample' not found in the string.\n\n";
}

// c. str_word_count
$wordCount = str_word_count($string);
echo "Number of words in the string: " . $wordCount . "\n\n";

// d. strrev
$reversedString = strrev($string);
echo "Reversed string: " . $reversedString . "\n\n";

// e. str_replace
$replacedString = str_replace("sample", "example", $string);
echo "String after replacement: " . $replacedString . "\n\n";

// f. strtolower
$lowercaseString = strtolower($string);
echo "String in lowercase: " . $lowercaseString . "\n\n";

// g. strtoupper
$uppercaseString = strtoupper($string);
echo "String in uppercase: " . $uppercaseString . "\n\n";
?>
