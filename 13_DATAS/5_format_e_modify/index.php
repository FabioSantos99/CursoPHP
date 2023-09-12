<?php

$data = new DateTime();

echo $data->format('d/m/y') . "<br>";

echo $data->format("D - M - Y") . "<br>";

echo $data->format("l - M - Y") . "<br>";

$data->modify('+5 months');
$data->modify('+15 days');
$data->modify('-1 year');

echo $data->format('d/m/y') . "<br>";