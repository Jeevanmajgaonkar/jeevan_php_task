<?php
//  Displaying Student Marks, Total, and Average 

$students = [
    "Ram" => ['Math' => 45, 'Hindi' => 78, 'English' => 89],
    "Sham" => ['Math' => 50, 'Hindi' => 87, 'English' => 60],
    "Geeta" => ['Math' => 90, 'Hindi' => 92, 'English' => 85],
];

foreach ($students as $name => $subjects) {
    echo $name;
    $total = 0;
    $count = 0;

    foreach ($subjects as $subject => $marks) {
        echo "$subject: $marks<br>";
        $total += $marks;
        $count++;
    }

    $average = $total / $count;
    echo "Total: $total<br>";
    echo "Average: " . round($average, 2) . "<br><br>";
}
?>
