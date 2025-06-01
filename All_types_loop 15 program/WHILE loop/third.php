<?php
// printing Fibonacci series for n term

$n = 10; 
$a = 0;
$b = 1;
$count = 0;

echo "Fibonacci Series up to $n terms:<br>";

while ($count < $n) {
    echo $a . "<br>";
    $next = $a + $b;
    $a = $b;
    $b = $next;
    $count++;
}
?>
