<?php

include 'util.php';

function createRandomArrayOfSize($size) {
    $result = range(0, $size);
    for($i = 0; $i < $size; $i++) {
        $result[$i] = rand(1, 99);
    }
    return $result;
}

$arr = createRandomArrayOfSize(10);

foreach($arr as $element) {
    writeLine($element);
}

writeLine("Sorting...");

$arr = sortArray($arr);

foreach($arr as $element) {
    writeLine($element);
}

function sortArray($arr) {
    $arrLen = count($arr);
    for($i = 0; $i < $arrLen - 1; $i++) {
        $swapped = false;
        for ($j = 0; $j < $arrLen - $i - 1; $j++) {
            if($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j + 1] = $temp;
                $swapped = true;
            }
        }
        if($swapped == false) {
            break;
        }
    }
    return $arr;
}