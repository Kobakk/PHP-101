<?php

function saneador($var):string{
    return htmlspecialchars(stripcslashes(trim($var)));
}

function game($numero, $numeroMagico) {
    if($numero == $numeroMagico){
        echo "You won";
    } else{
        echo "Try again";
    }
}

function test(){
    echo "test \n";
}
?>