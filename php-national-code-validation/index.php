<?php 

include('header.php');

function validateCodeMeli($codeMeli) 
{
    $codeMeli = str_replace(['-', '_', ' '], '', $codeMeli); // حذف هر چیزی غیر از ارقام از کد ملی

    if (strlen($codeMeli) != 10) { // بررسی طول کد ملی
        return false;
    }
    // محاسبه جمع ارقام ضرب شده در وزن‌ها
    $sum = 0;
    for ($i = 0; $i < 9; $i++) {
        $sum += $codeMeli[$i] * (10 - $i);
    }
    // $control = ($sum % 11 < 2) ? $sum % 11 : 11 - ($sum % 11); 
    // محاسبه رقم کنترل
    if ($sum % 11 < 2) {
        $control = $sum % 11;
    } else {
        $control = 11 - ($sum % 11);
    }

    return $control == $codeMeli[9]; // بررسی صحت رقم کنترل
}

// مثال برای تست
$codeMeli = '0640414117';
if (validateCodeMeli($codeMeli)) {
    echo '<div style=" width: 70%;font-size:30px ;margin:300px auto ; display:flex ; justify-content:center ; align-items:center; color:white ; background-color:green">کد ملی معتبر است </div>';
} else {
    echo '<div style="width: 70%;font-size:30px ;margin:300px auto ; display:flex ; justify-content:center ; align-items:center; color:white ; background-color:red">کد ملی نا معتبر است </div>';
}
include('footer.php');

//
echo 'hello';