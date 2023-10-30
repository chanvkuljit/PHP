//first file
<?php
$included_variable = "This is a variable from the included file.";
echo "This is a line from the included file.\n";
?>

//second file
<?php
// Using include function
echo "Using include function:\n";
include 'included_file.php';
echo $included_variable . "\n";

// Using require function
echo "Using require function:\n";
require 'included_file.php';
echo $included_variable . "\n";
?>

