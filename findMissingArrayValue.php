<?php

include 'util.php';

$size = 10;

$arr = createMissingIntArray($size);

$total = (($size - 1) * $size) / 2;

for($i = 0; $i < $size - 1; $i++) {
    $total -= $arr[$i];
}

writeLine($total);

