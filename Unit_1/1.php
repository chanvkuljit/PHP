<?php

define("STUDENT_NAME", "Kuldeep Chanv");
define("SEMESTER", "Fall 2022");
define("SUBJECTS", ['Mathematics', 'Physics', 'Chemistry']);
define("MARKS", [80, 75, 85]);


$totalMarks = array_sum(MARKS);
$numberOfSubjects = count(SUBJECTS);
$averageMarks = $totalMarks / $numberOfSubjects;


echo "Previous Semester Result of " . STUDENT_NAME . " in " . SEMESTER . ":\n";
for ($i = 0; $i < $numberOfSubjects; $i++) {
    echo SUBJECTS[$i] . ": " . MARKS[$i] . "\n";
}
echo "Total Marks: " . $totalMarks . "\n";
echo "Average Marks: " . $averageMarks . "\n";
?>
