<?php

$list1 = array(1, 3, 6, 9, 11);
$list2 = array(0, 1, 4, 5, 6, 8, 10, 11, 12);
$result = array();

findCommon($list1, $list2, sizeof($list1), sizeof($list2), 0, 0, $result);

function findCommon($l1, $l2, $s1, $s2, $p1, $p2, $res) {

    // check for out of range
    if($p1 == $s1 || $p2 == $s2) {
        print_r($res);
        return;
    }

    // temp variable
    $tmp1 = $l1[$p1];
    $tmp2 = $l2[$p2];
    // check if elements are same
    if($tmp1 === $tmp2) {
        array_push($res, $tmp1);
        $p1++;
        $p2++;
    }
    else if($tmp1 > $tmp2) {
        $p2++;
    }
    else {
        $p1++;
    }

    findCommon($l1, $l2, $s1, $s2, $p1, $p2, $res);
}

?>