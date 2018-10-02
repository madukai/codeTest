<?php

$intArray = array(3, 6, 5, 10, 7, 8, 4, 9, 2);
$mult = 20;
two_sum($intArray, $mult);

function two_sum($intArray, $mult) {
    $lenArray = sizeof($intArray);
    $m;
    $n;
    $result = array();

    echo "Array length = " . $lenArray . "\n";

    for($i=0; $i < $lenArray; $i++) {
        // pass element
        $m = $intArray[$i];
        // check if element is divisible to the given product
        if(isDivisible($m, $mult) === true) {
            $n = ($mult / $m);
            echo "Quot = " . $n . "\n";
        }
        else {
            continue;
        }
        // check if the quotient is in array
        if(in_array($n, $intArray)) {
            // if true: check if already push to the result
            if(in_array($m, $result) == false && in_array($n, $result) == false) {
                array_push($result, $m, $n);
            }
        }
    }

    print_r($result);
}

function isDivisible($m1, $mt) {

    if(($mt % $m1) === 0) {
        return true;
    }
    else {
        return false;
    }
}
?>