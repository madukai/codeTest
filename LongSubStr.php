<?php
// run code
main();

function main() {

    $strWrd = "sssaabbsjjkllllw";
    $strLen = strlen($strWrd);

    //print_char_string($strWrd, $strLen);
    count_char($strWrd, $strLen);

    return 0;
}

// function to print each char of string
function print_char_string($str, $strLen) {

    $i = 0;
    for(; $i < $strLen - 1; $i++) {
        echo $str[$i] . " ";
    }
    // print last char
    echo $str[$i] . "\n\n";
}

function count_char($str, $strLen) {

    // keep track of prev char
    $prevChar;

    // keep track of max number
    $maxCharNum = 0;

    // char with the longest sequence
    $charLong;

    // current count
    $curCount = 1;

    // iterate through chars in the string
    for($i = 0; $i < $strLen; $i++) {

        if(isset($prevChar) == false) {

            $prevChar = $str[$i];
            $charLong = $str[$i];

            continue;
        }

        if($prevChar == $str[$i]) {
            $curCount++;
        }
        else {

            // check if current count is bigger than mx
            if($curCount > $maxCharNum)
            {
                $maxCharNum = $curCount;
                $charLong = $prevChar;
            }
            // set prev char
            $prevChar = $str[$i];
            // reset current count to 1
            $curCount = 1;
        }
    }

    echo $charLong . " - number: " . $maxCharNum . " \n\n";
}
?>