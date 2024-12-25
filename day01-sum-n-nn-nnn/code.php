<?php

function caculate_sum($n) {
    if ($n <= 0 || $n >= 10) {
        $res =  "Lỗi: n phải là số nguyên dương và nhỏ hơn 10.";
    } else {
        $nn = $n * 10 + $n;
        $nnn = $n * 100 + $nn;
        $sum = $n + $nn + $nnn;
        $res = "Kết quả: $n + $nn + $nnn = " . $sum;
    }

    return $res;
}

// Input
$n = 10; 

// Output
echo caculate_sum($n);

?>