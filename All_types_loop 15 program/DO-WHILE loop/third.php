
<?php
//calculating sum of array

$numbers = [5, 10, 15, 0]; 
$sum = 0;
$i = 0;
do {
    $num = $numbers[$i];
    $sum += $num;
    $i++;
} while ($num != 0);
echo "Sum = " . $sum;
 ?>

