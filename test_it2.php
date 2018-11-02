<?php

main();

function main() {

    $listChar = array('a', 'x', 'c', 'd', 'x', 'e');

    $result = iterateOne($listChar, sizeof($listChar), 0);

    echo($result . "\n\n");

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
?>