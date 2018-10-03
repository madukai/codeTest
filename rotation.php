<?php

// run
main();

function main() {
    $list1 = array(1, 2, 3, 4, 5, 6, 7);
    $list2 = array(4, 5, 6, 7, 1, 2, 3);

    $result = isRotation($list1, $list2);

    if($result) {
        echo "Result is TRUE \n\n";
    } else {
        echo "Result is FALSE \n\n";
    }
}

function isRotation($list1, $list2) {

    // check if lenght is the same
    if(sizeof($list1) !== sizeof($list2)) {

        return false;
    }

    $i = 0;
    $limit = getGap($list1[0], $list2); // get gap

    while($i < $limit) {
        rotateArray($list1, sizeof($list1)-1, 0);
        $i++;
    }

    return compareArrays($list1, $list2);
}

function compareArrays($list1, $list2) {

    $isRotate = true;
    // iterate into to 2 arrays
    for($i = 0; $i < sizeof($list1); $i++) {
        // if one of the element is not same
        if($list1[$i] !== $list2[$i]) {
            $isRotate = false;
            break;
        }
    }
    // return
    return $isRotate;
}

function rotateArray(&$list1, $ls, $idx) {
    // check for out of range
    if($idx == $ls) {
        print_r($list1);
        return;
    }

    // Swap elements
    $tmp = $list1[$idx];
    $list1[$idx] = $list1[$idx + 1];
    $list1[$idx + 1] = $tmp;

    // increment
    $idx++;
    rotateArray($list1, $ls, $idx);
}

function getGap($n, $list2) {
    $index = 0;
    // iterate through second array
    for($i = 0; $i < sizeof($list2); $i++) {
        // compare
        if($n === $list2[$i]) {
            $index = $i;
        }
    }

    return $index - 1;
}

?>