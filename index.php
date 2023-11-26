<?php

$counter = 1;
$students = [
    [ 1 , 'ali'     , 'akbari'     , 'grades' => ['reiazi' => 14, 'farsi' => 16, 'shimi' => 18]],
    [ 2 ,'reza'     , 'mohammadi'  , 'grades' => ['reiazi' => 17, 'farsi' => 19, 'shimi' => 15]],
    [ 3 , 'mina'    , 'hajizadeh'  , 'grades' => ['reiazi' => 12, 'farsi' => 13, 'shimi' => 20]],
    [ 4 , 'sara'    , 'farshid'    , 'grades' => ['reiazi' => 10, 'farsi' => 11, 'shimi' => 14]],
    [ 5 , 'setareh' , 'asghari'    , 'grades' => ['reiazi' => 19, 'farsi' => 17, 'shimi' => 16]],
    [ 6 , 'akbar'   , 'fatemi'     , 'grades' => ['reiazi' => 13, 'farsi' => 15, 'shimi' => 12]],
    [ 7 , 'javad'   , 'yeganeh'    , 'grades' => ['reiazi' => 16, 'farsi' => 14, 'shimi' => 19]],
    [ 8 , 'sina'    , 'hassani'    , 'grades' => ['reiazi' => 18, 'farsi' => 10, 'shimi' => 11]],
    [ 9 , 'arash'   , 'alavi'      , 'grades' => ['reiazi' => 15, 'farsi' => 18, 'shimi' => 17]],
    [ 10,'yeganeh'  , 'ghasemi'    , 'grades' => ['reiazi' => 20, 'farsi' => 12, 'shimi' => 13]]
];
foreach ($students as $student) {
     $sum = $student['grades']['reiazi']+$student['grades']['farsi']+$student['grades']['shimi'];
    $average = $sum/3;
     if($average < 10){
        echo "# ".$counter . " ".$student['1']." " . $student['2'] ." ". $average ." ".
        "<span>Filed</span>"."<br> ";
     }  
     else
       echo "# ".$counter . " ".$student['1']." " . $student['2'] ." ". $average ."<br> ";
     $counter++;
};


