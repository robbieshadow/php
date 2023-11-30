<?php

function myExplode($jodakonandeh, $string) 
{
    $result = [];
    $token = strtok($string, $jodakonandeh) ;
    while ($token !== false) {
    $result[] = $token;
    $token = strtok($jodakonandeh);
    }
    return $result;
}


$mystr = "salam,khoobi";
$delimiter = ",";
$array = myExplode($jodakonandeh, $mystr);

print_r($array); 