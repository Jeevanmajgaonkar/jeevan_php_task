<?php
//display data in table
$employee = [
    "emp1" => ["id" => 1, "name" => "ram", "salary" => 45000],
    "emp2" => ["id" => 2, "name" => "sham", "salary" => 40000],
    "emp3" => ["id" => 3, "name" => "dada", "salary" => 50000],
    "emp4" => ["id" => 4, "name" => "rohan", "salary" => 140000],
    "emp5" => ["id" => 5, "name" => "soham", "salary" => 250000],
];


// table start 
echo '<table border="2" style="border-collapse: collapse;">';
//table heading 
echo "<tr>
    <th>id</th>
    <th>name</th>
    <th>salary</th>
</tr>";

foreach ($employee as $item => $items) {
    echo "<tr>";
    foreach ($items as $val) {
        //table data
        echo "<td>" . $val . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
// table tag close;
?>

 