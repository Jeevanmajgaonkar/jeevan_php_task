<?php
// Display Student Marks using Associative Array

$studentMarks = [
    'Amit' => 85,
    'Sneha' => 92,
    'Ravi' => 76,
    'Priya' => 89
];

foreach ($studentMarks as $name => $marks) {
    echo "Student: $name, Marks: $marks<br>";
}

?>