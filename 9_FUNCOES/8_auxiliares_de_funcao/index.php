<?php

function soma($a, $b, $c) {

    print_r(func_get_args());

    echo "<br>";

    print_r(func_num_args());

    return $a + $b;
}

soma(2, 4,4);