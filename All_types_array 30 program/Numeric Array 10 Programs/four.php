<?php

// finding max number from array

$array = [5, 93, 8, 9,78, 1];

$big_num=$array[0]; //assign 0 index value already

for($i=1; $i<5;$i++){
    if($big_num< $array[$i]){ //compare both element
        $big_num=$array[$i];
    }
}
//print the outout
echo $big_num;


?>