<?php

function writeLine($message) {
    echo $message . "\n";
}

function createMissingIntArray($size) {
    $max = $size - 1;
    $arr = range(0, $max);
    $removed = rand(0, $max);
    writeLine($removed);
    array_splice($arr, $removed, 1);
    return $arr;
}