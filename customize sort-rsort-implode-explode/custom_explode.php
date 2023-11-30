<?php

function myExplode($delimiter, $string) 
{
    $result = [];
    $token = strtok($string, $delimiter);
    while ($token !== false) {
    $result[] = $token;
    $token = strtok($delimiter);
    }
    return $result;
}


$mystr = "salam,khoobi";
$delimiter = ",";
$array = myExplode($delimiter, $mystr);

print_r($array); 