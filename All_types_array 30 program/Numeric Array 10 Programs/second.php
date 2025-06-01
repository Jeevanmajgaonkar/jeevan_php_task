<?php
$array = [5, 3, 8, 9, 1];

for ($i = 0; $i < 5; $i++)
 { 
    for ($j = 0; $j < 5; $j++)     //nested loop
     {
        if ($array[$i] < $array[$j])
         {
            $temp = $array[$i];         //swap the arrraay using temp verible
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
//print the sort array 
print_r($array);
?>
