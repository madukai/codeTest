<?php

$numArray = array(-1, 0, 1, 2, -1, -4);

$result = "";
$done = false;

$s = sizeof($numArray)-1;

backtrackSum($numArray, 0, $s, 0, 0, "");
endOfLine();

echo $result;
function endOfLine() {
    echo "\n\n";
}

function backtrackSum($an, $b, $e, $d, $l, $st) {

    if($done) {
        return true;
    }
    // check for limit
    if($b === $e) {

        return true;
    }
    else {
        if($l == 2) {
            // add
            $d = $d + $an[$b];

            // contcatonate
            $st .= $an[$b];

            if($d === 0) {
                $result = $st;
                echo "Result: $result";
                $done = true;
            }
            // reset
            $l = 1;
        }
        else {
            // add
            $d = $d + $an[$b];
            // contcatonate
            $st .= $an[$b];
            $l++;
        }

        // increment
        $b++;

        backtrackSum($an, $b, $e, $d, $l, $st);
        return true;
    }
}

function checkStr($str) {
    if(sizeof($str) < 3) {
        $str = $str . $n;

        echo $str;
        endOfLine();
    }
}
?>