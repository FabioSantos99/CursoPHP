<?php


$url = "https://www.google.com";

$arrayurl = parse_url($url);

print_r($arrayurl);
echo "<br>";

echo $arrayurl['host'];
echo "<br>";

$url2 = "http://www.horadecodar.com.br/?busca=php";

$arrayUrl2= parse_url($url2);

print_r($arrayUrl2);
echo "<br>";