<?php
$numbers = [10, 5, 8, 2, 7];

function myRsort($array) {
    usort($array, function($a, $b) {
        return $b - $a;
    });
    return $array;
}

function mySort($array) {
    usort($array, function($a, $b) {
        return $a - $b;
    });
    return $array;
}

$sortedDesc = myRsort($numbers);
print_r($sortedDesc);

$sortedAsc = mySort($numbers);
print_r($sortedAsc);

print_r($numbers);