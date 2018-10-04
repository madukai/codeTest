<?php

$sumTarget = 8;
$list1 = array(9,2,3,7,5,6);

findAllSum($list1, $sumTarget);

function findAllSum($list1, $st){

    $result = array();
    $len = sizeof($list1);

    for($i = 0; $i < $len; $i++) {
        // check if element is bigger
        if($list1[$i] > $st) {
            continue;
        }

        $diff = $st - $list1[$i];

        if(in_array($diff, $list1)) {
            if(in_array($diff, $result) == false) {
                array_push($result, $list1[$i], $diff);
            }
        }
    }

    print_r($result);
}

?>