<?php

main();

function main() {

    //$listChar = array('a', 'x', 'c', 'd', 'x', 'e');

    //$result = iterateOne($listChar, sizeof($listChar), 0);

    //echo($result . "\n\n");

    $an = array(2, 3, 4, 0);

    print_r($an);

    $result = shift_array($an);

    print_r($result);

    return 0;
}

function iterateOne($c, $n, $i) {

    if($i === $n) {
        return $c[$i];
    }

    if(iterateTwo($c[$i], $c, $n, $i++) === true) {
        return $c[$i];
    }

    $i++;
    return iterateOne($c, $n, $i);
}

function iterateTwo($c1, $c2, $n, $i) {

    if($i === $n) {
        return '#';
    }

    // compare
    if($c1 === $c2[$i]) {
        return true;
    }

    // increment
    $i++;
    return iterateTwo($c1, $c2, $n, $i);
}

function shift_array($an) {

    // get length of array
    $len = sizeof($an);

    for($i = $len-1; $i > 0; $i--) {
        // swa[]
        $t = $an[$i];
        $an[$i] = $an[$i-1];
        $an[$i-1] = $t;
    }

    return $an;
}
?>