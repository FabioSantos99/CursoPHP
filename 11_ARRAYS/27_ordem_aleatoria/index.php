<?php

$arr = range(1,25);

shuffle($arr);

print_r($arr);
echo "<br>";

for ($i = 0; $i < count($arr); $i++) {
    echo "$arr[$i] <br>";
}