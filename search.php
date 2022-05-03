<?php

include 'util.php';

$searchVal = 13;

$arr = array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19);

$arrLen = count($arr);

$start = 0;

$end = $arrLen - 1;

$result = search($arr, $searchVal, $start, $end);

writeLine($result);

function search($arr, $searchVal, $start, $end) { 
    $result = -1;  
    $mid = round($end / 2) + $start;    
    $midVal = $arr[$mid];
    if ($midVal == $searchVal) {
        $result = $mid;
    }
    else if ($midVal > $searchVal) {
        //search first half
        $result = search($arr, $searchVal, $start, $mid);
    } else {
        //search second half
        $result = search($arr, $searchVal, $mid, $end);
    }
    return $result;
}