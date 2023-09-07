<?php

$arr = [

    [2.3, 7, 5, 6],
    ['text', 'name', 'gol', 'casa'],
    [true, false, true, false]

];

print_r($arr) . "<br>";
echo "<br>";

echo $arr[1][2] . "<br>";
echo $arr[0][3] . "<br>";
echo count($arr) . "<br>";


$arr2 = [
    [1,2,4,6],
    [2,4,6,8],
    [3,7,9,12]
];

for ($i = 0; $i < count($arr2); $i++) {

    // imprimindo Array
    echo "imprimindo o array externo: " . ($i + 1);

    // Imprimindo o array interno
    for($j = 0; $j < count($arr2[$i]); $j++) {
        echo $arr2[$i][$j] . "<br>";
    }
}
