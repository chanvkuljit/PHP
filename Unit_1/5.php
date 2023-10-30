<?php
echo "Printing numbers from 5 to 10 using for loop:\n";
for ($i = 5; $i <= 10; $i++) 
{
    echo $i . "\n";
}

$numbers = [5, 6, 7, 8, 9, 10];
foreach ($numbers as $number) {
    echo $number . "\n";
}
?>
