<?php
function myImplode($a, $array) {
    $result = '';
    $lastElement = end($array);;
    foreach ($array as $index => $value) {
        $result = $result . $value;
        if ($value !== $lastElement) {
            $result = $result . $a;
        }
    }
    return $result;
}

// example
$colors = array('red', 'green', 'blue', 'yellow');
$a = '-';
$result = myImplode($a. $colors);
echo $result;