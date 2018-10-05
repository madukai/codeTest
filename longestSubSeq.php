<?php
// run code
main();

function main() {

    $word = "sddfgcxxxklmnop";

    getLongSeq($word, strlen($word));

    return 0;
}

function getLongSeq($w, $l) {

    $prevChar;

    $temp;
    $longSeqWord;

    $max = 0;

    for($i = 0; $i < $l; $i++) {

        // check if prev char is set
        if(isset($prevChar) == false) {
            $temp = $prevChar = $w[$i];
            continue;
        }

        // check if prev and current element is NOT the same
        if($prevChar != $w[$i]) {
            $temp .= $w[$i];
            $prevChar = $w[$i];
        }
        else {
            // check if temp len is bigger than max
            if(strlen($temp) > $max) {
                $max = strlen($temp);
                $longSeqWord = $temp;

                $temp = $w[$i];
                $prevChar = $w[$i];
            }
        }
    }

    // check
    if(strlen($temp) > $max) {
        $longSeqWord = $temp;
    }

    echo "Longest sub-seq: $longSeqWord\n\n";
}
?>