<?php

main();

function main() {

    $s = "ooxww"; // wwxoo
    $r = revStr($s, 0, strlen($s)-1);

    echo ($r . "\n\n");

    //fzzbzz(15, 0);

    $a = array(1, 3, 5, 8, 7, 4, 6, 2);

    halfAry($a);

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

function halfAry($a = array()) {

    sort($a);

    $size = sizeof($a) - 1;

    $md = intdiv(sizeof($a), 2);

    echo "md: " . $md . " - size: " . $size . "\n\n";

    while($md < $size) {

        echo $a[$md] . " - " . $a[$size] . "\n\n";

        $t = $a[$md];
        $a[$md] = $a[$size];
        $a[$size] = $t;

        $md++;
        $size--;
    }

    print_r($a);
}

?>