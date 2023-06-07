<?php 
//Creating arrays 
$array1 = [2,3,0.5,7];
$array2 = [0.2, 3, 0.5, 7];

//The intersection of the two arrays (numbers in common)
$intersection = array_intersect($array1, $array2);

//Mixture of the two arrays
$merge = array_merge($array1, $array2);

//Print intersection
print_r($intersection);

//Print merge
print_r($merge);
?>