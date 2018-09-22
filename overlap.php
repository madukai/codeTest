<?php

$overlap = array(
    '0' => array('s' => 1, 'e' => 3),
    '1' => array('s' => 2, 'e' => 5),
    '2' => array('s' => 6, 'e' => 9),
    '3' => array('s' => 7, 'e' => 10),
    '4' => array('s' => 11, 'e' => 13)
);

overlap($overlap);

function overlap($sl) {
    $len = sizeof($sl);

    $mergedLap = array();
    $curIdx = 0;

    // size of merged lap
    $mLen = sizeof($mergedLap);

    // iteterate
    for($i = 0; $i < $len; $i++) {

        // check if mergelen is empty
        if($mLen === 0) {
            array_push($mergedLap, $sl[$i]);
            $mLen = sizeof($mergedLap);

            // go to next
            continue;
        }

        // Logic to check if the second start is smaller than ending
        if($mergedLap[$curIdx]['e'] > $sl[$i]['s']) {
            $mergedLap[$curIdx]['e'] = $sl[$i]['e'];
        }
        else {
            array_push($mergedLap, $sl[$i]);
            $curIdx++;
        }


        //print_r($sl[$i]['s']);
        //echo " ";
    }

    echo "E changed\n\n";
    print_r($mergedLap);
}

?>