<?php

$arr = range(1,20);

var_dump(array_chunk($arr, 4));
echo "<br><br>";

$arrays = array_chunk($arr, 10);

print_r($arrays);
echo "<br>";






