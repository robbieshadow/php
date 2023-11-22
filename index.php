<?php

$counter = 1;
$students = [
    ['id' => 1 , 'ali'     , 'akbari'     , 'grades' => ['reiazi' => 14, 'farsi' => 16, 'shimi' => 18]],
    ['id' => 2 ,'reza'     , 'mohammadi'  , 'grades' => ['reiazi' => 17, 'farsi' => 19, 'shimi' => 15]],
    ['id' => 3 , 'mina'    , 'hajizadeh'  , 'grades' => ['reiazi' => 12, 'farsi' => 13, 'shimi' => 20]],
    ['id' => 4 , 'sara'    , 'farshid'    , 'grades' => ['reiazi' => 10, 'farsi' => 11, 'shimi' => 14]],
    ['id' => 5 , 'setareh' , 'asghari'    , 'grades' => ['reiazi' => 19, 'farsi' => 17, 'shimi' => 16]],
    ['id' => 6 , 'akbar'   , 'fatemi'     , 'grades' => ['reiazi' => 13, 'farsi' => 15, 'shimi' => 12]],
    ['id' => 7 , 'javad'   , 'yeganeh'    , 'grades' => ['reiazi' => 16, 'farsi' => 14, 'shimi' => 19]],
    ['id' => 8 , 'sina'    , 'hassani'    , 'grades' => ['reiazi' => 18, 'farsi' => 10, 'shimi' => 11]],
    ['id' => 9 , 'arash'   , 'alavi'      , 'grades' => ['reiazi' => 15, 'farsi' => 18, 'shimi' => 17]],
    ['id' => 10,'yeganeh'  , 'ghasemi'    , 'grades' => ['reiazi' => 20, 'farsi' => 12, 'shimi' => 13]]
];

foreach ($students as $student) {
    $average = array_sum($student['grades']) / count($student['grades']);
    echo "نام: " . " " . $student[0] . " " . $student[1] . " ". " | معدل: " . $average . " " . " | شماره دانش آموز: " . " " . $student['id'] . "<br>";
    $counter ++;
};

