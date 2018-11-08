<?php

main();

function main() {

    //$s = "ooxww"; // wwxoo
    //$r = revStr($s, 0, strlen($s)-1);

    //echo ($r . "\n\n");

    //fzzbzz(15, 0);

    //$a = array(1, 3, 5, 8, 7, 4, 6, 2);

    //halfAry($a);

    //isPDrome("racecar");

    //printStep(5);

    $vd = array(array(2, 4),
                array(3, 5)
               );

    Print2D($vd);

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

    echo "\n\n";
}

function isPDrome($str) {

    $sLen = strlen($str);
    echo("Len: $sLen \n");
    $i = 0;
    $j = $sLen - 1;

    $result = true;

    while($i < $sLen) {

        echo ("S: " . $str[$i] . " E: " . $str[$j] . "\n");

        if($str[$i] != $str[$j]){
            $result = false;
            break;
        }

        $i++;
        $j--;
    }

    if($result) {
        echo ("Is pd \n");
    }
    else {
        echo ("Is not pd \n");
    }
}

function printStep($n) {

    for($i=0; $i < $n; $i++) { // row
        $step = '';
        for($j=0; $j < $n; $j++) { // col
            if($j <= $i) {
                $step .= '#';
            }
            else {
                $step .= ' ';
            }
        }
        echo($step);
        endl();
    }
}

function Print2D($vd = array(array())) {

    foreach($vd as $v) {
        foreach($v as $d) {
            echo("$d ");
        }
        endl();
    }
}

// end of line function
function endl() {
    echo("\n");
}

?>