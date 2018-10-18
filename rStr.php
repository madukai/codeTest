<?php

main();

function main() {

    $s = "ooxww"; // wwxoo
    $r = revStr($s, 0, strlen($s)-1);

    echo ($r . "\n\n");

    fzzbzz(15, 0);

    return 0;
}

function revStr($s, $i, $j) {
    if($i > $j) {
        return $s;
    }
    // swap
    $tmp = $s[$j];
    $s[$j] = $s[$i];
    $s[$i] = $tmp;

    // increment
    $i++;
    // decrement
    $j--;
    // recursion
    return revStr($s, $i, $j);
}

function fzzbzz($n, $i) {

    $div = $i % 3;
    $div2 = $i % 5;

    if($i == $n) {
        if($div == 0 && $div2 == 0) {
            echo " fizzbuzz ";
        }
        else if($div == 0) {
            echo " fizz ";
        }
        else if($div2 == 0){
            echo " buzz ";
        }
        else {
            echo " $i ";
        }
        echo "\n\n";
        return;
    }
    if($i == 0) {
        echo "0";
    }
    else if($div == 0 && $div2 == 0) {
        echo " fizzbuzz ";
    }
    else if($div == 0) {
        echo " fizz ";
    }
    else if($div2 == 0){
        echo " buzz ";
    }
    else {
        echo " $i ";
    }

    //increment
    $i++;
    fzzbzz($n, $i);
}

?>