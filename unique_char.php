<?php

// run code
main();

function main() {

    $word = "aaxbb";

    $result = iterate_char_recursive($word, 0, array());

    print_r($result);
}

// iterate through string recursively
function iterate_char_recursive($word, $i, $m) {
    if($i == strlen($word)) {
        return $m;
    }

    $c = $word[$i];
    // check if current char is already inside array
    if(isset($m[$c])) {
        $m[$c] += 1;
    }
    else {
        // push to array
        $m = array_push_assoc($m, $c, 1);
    }

    // increment
    $i++;

    // recusive call
    return iterate_char_recursive($word, $i, $m);
}

function array_push_assoc($array, $key, $value){
    $array[$key] = $value;
    return $array;
}
?>