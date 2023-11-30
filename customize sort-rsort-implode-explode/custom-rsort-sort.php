<?php
function myRsort(&$array) {
    usort($array, function($a, $b) {
        return $b - $a; 
    });
}

function mySort(&$array) {
    usort($array, function($a, $b) {
        return $a - $b;
    });
}

//exampele
$numbers = [10, 5, 8, 2, 7];
myRsort($numbers);
print_r($numbers);
echo "<br>";
mySort($numbers);
print_r($numbers);