<?php

$a = 5;

if($a < 5) {
    return false;

}elseif($a % 2 == 0){

    echo "Não é primo";
    
}elseif($a % 3 == 0){

    echo "Não é primo";
    
}elseif($a % 4 == 0){

    echo "Não é primo";
    
}elseif($a % 5 == 0){

    echo "Não é primo";
    
} else {
    echo "$a é numero primo";
}