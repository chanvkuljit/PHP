<?php
// Get the current month as a number (1 for January, 2 for February, etc.)
$currentMonth = date('n');

echo "Using if...else statement:\n";

if ($currentMonth == 1) {
    echo "The current month is January.\n";
} elseif ($currentMonth == 2) {
    echo "The current month is February.\n";
} elseif ($currentMonth == 3) {
    echo "The current month is March.\n";
} elseif ($currentMonth == 4) {
    echo "The current month is April.\n";
} elseif ($currentMonth == 5) {
    echo "The current month is May.\n";
} elseif ($currentMonth == 6) {
    echo "The current month is June.\n";
} elseif ($currentMonth == 7) {
    echo "The current month is July.\n";
} elseif ($currentMonth == 8) {
    echo "The current month is August.\n";
} elseif ($currentMonth == 9) {
    echo "The current month is September.\n";
} elseif ($currentMonth == 10) {
    echo "The current month is October.\n";
} elseif ($currentMonth == 11) {
    echo "The current month is November.\n";
} elseif ($currentMonth == 12) {
    echo "The current month is December.\n";
} else {
    echo "Invalid month.\n";
}


echo "Using switch case statement:\n";

switch ($currentMonth) {
    case 1:
        echo "The current month is January.\n";
        break;
    case 2:
        echo "The current month is February.\n";
        break;
    case 3:
        echo "The current month is March.\n";
        break;
    case 4:
        echo "The current month is April.\n";
        break;
    case 5:
        echo "The current month is May.\n";
        break;
    case 6:
        echo "The current month is June.\n";
        break;
    case 7:
        echo "The current month is July.\n";
        break;
    case 8:
        echo "The current month is August.\n";
        break;
    case 9:
        echo "The current month is September.\n";
        break;
    case 10:
        echo "The current month is October.\n";
        break;
    case 11:
        echo "The current month is November.\n";
        break;
    case 12:
        echo "The current month is December.\n";
        break;
    default:
        echo "Invalid month.\n";
}
?>
