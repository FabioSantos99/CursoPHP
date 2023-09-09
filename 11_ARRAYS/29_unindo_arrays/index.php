<?php

$arr = [1,3,5];
$arr2 = [2,4,7];
$arr3 = [3, 4, 7];
$arr4 = ['gdifo', 'teste'];

$arrMerge = array_merge($arr,$arr2,$arr3, $arr4);

print_r($arrMerge);
echo "<br>";

for($i = 0; $i < count($arrMerge); $i++) {
    echo "$arrMerge[$i] <br>";
}