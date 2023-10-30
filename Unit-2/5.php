<?php
// Original variable
$originalVariable = "123";

// Using settype function for type casting
settype($originalVariable, "integer");
echo "After using settype function:\n";
echo "Value: " . $originalVariable . "\n";
echo "Type: " . gettype($originalVariable) . "\n\n";

// Using type casting directly
$anotherVariable = (float) $originalVariable;
echo "After type casting directly:\n";
echo "Value: " . $anotherVariable . "\n";
echo "Type: " . gettype($anotherVariable) . "\n\n";
?>
