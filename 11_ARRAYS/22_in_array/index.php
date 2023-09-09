<?php

$arr = ['banana', 'maca', 'pera','limao', 'mamao'];

if(in_array('maca',$arr)){

    echo "Há o item maça <br>";
} else {
    echo "Não há maça no array <br>";
}

$b = 'banana';

if(in_array($b,$arr)){

    echo "Há o item banana no array <br>";
} else {
    echo "Não há banana no array <br>";
}

if(in_array("teste",$arr)) {
    echo "Há o item teste no array <br>";
} else {
    echo "Não há teste no array <br>";
}
