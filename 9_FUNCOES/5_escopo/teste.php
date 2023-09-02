<?php
 
function sumEvenNumbers($num) {
    $sum = 0; 
    for ($i = 1; $i <= $num; $i ++) {
        if($i % 2 == 0) {
            
            $sum += $i;
        }
    }
 
    return $sum;
}
 
$num = 10; 
$result = sumEvenNumbers($num);
 
echo $result;