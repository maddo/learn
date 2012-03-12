<?php

require_once 'mergesort.php';

$a = array(10,3,11,2,7,8,4,12,9,5,1,6,13);

list($sorted, $inv) = mergeSort($a);

echo "\nOriginal:\n" . displayArray($a);
echo "\nSorted:\n" . displayArray($sorted) . "\n";

function displayArray($arr)
{
    $prettyArray = '';
    $sep = '';
    foreach ($arr as $a) {
        $prettyArray .= $sep . $a;
        $sep = ', ';
    }

    return $prettyArray;
}