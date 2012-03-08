<?php

$a = array(10,3,11,2,7,8,4,12,9,5,1,6,13);

$sorted = mergeSort($a);

echo "\nOriginal:\n" . displayArray($a);
echo "\nSorted:\n" . displayArray($sorted) . "\n";

function mergeSort($arr) 
{
    if (count($arr) < 2)
        return $arr;

    $size   = ceil(count($arr) / 2);
    list($left, $right)  = array_chunk($arr, $size);

    $left  = mergeSort($left);
    $right = mergeSort($right);

    $iLimit = count($left);
    $kLimit = count($right);
    
    $sorted = array();

    $i = $k = 0;
    while ($i < $iLimit || $k < $kLimit) {

        if ($i >= $iLimit) {
            while($k < $kLimit) {
                $sorted[] = $right[$k];
                $k++;
            }
        } elseif ($k >= $kLimit) {
            while($i < $iLimit) {
                $sorted[] = $left[$i];
                $i++;
            }
        } elseif ( $left[$i] < $right[$k] ) {
            $sorted[] = $left[$i];
            $i ++;
        } else {
            $sorted[] = $right[$k];
            $k ++;
        }
    }

    return $sorted;
}

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