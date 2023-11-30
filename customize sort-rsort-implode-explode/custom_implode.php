<?php
function myImplode($glue, $array) {
    $result = '';
    $lastElement = end($array);;
    foreach ($array as $index => $value) {
        $result = $result . $value;
        if ($value !== $lastElement) {
            $result = $result . $glue;
        }
    }
    return $result;
}

// example
$colors = array('red', 'green', 'blue', 'yellow');
$glue = '-';
$result = myImplode($glue, $colors);
echo $result;