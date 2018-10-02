<?php
$list1 = array(5, 8, 5, 8, 2, 5);
$result = array();

getMostFrequentItem($list1, sizeof($list1), 0, $result);

function getMostFrequentItem($al, $s, $i, $res) {

    // check for out of range
    if($i == $s) {
        print_r($res);
        return;
    }

    // temp
    $tm = $al[$i];

    // Check if element is already in the result array
    if(in_array($tm, $al)) {
        $res[$tm] += 1;
    }
    else {
        // push it to the result array
        $res = array_push_assoc($res, $tm, 1);
    }
    // Increment
    $i++;

    getMostFrequentItem($al, $s, $i, $res);
}

function array_push_assoc($array, $key, $value){
    $array[$key] = $value;
    return $array;
}

?>