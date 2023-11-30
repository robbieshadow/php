<?php
function myImplode($glue, $array) 
{
    $result = '';
    foreach ($array as $index => $value) {
    $result .= $value;
    if ($index !== count($array) - 1) {
        $result .= $glue;
    }
    }
    return $result;
}

// example
$colors = array('red', 'green', 'blue', 'yellow');
$glue = '-';
$result = myImplode($glue, $colors);
echo $result;