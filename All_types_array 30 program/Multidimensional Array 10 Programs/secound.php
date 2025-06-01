<?php
//array access with key 

$student = [
    "sonu" => ['math' => 45, 'hindi' => 78, 'english' => 89],
    "monu" => ['math' => 50, 'hindi' => 87, 'english' => 60],
];

echo $student['sonu']['math']; //print element through key