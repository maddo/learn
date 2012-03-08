<?php

$a = array(10,3,11,2,7,8,4,12,9,5,1,6);

echo "\nOriginal:\n";
echo displayArray($a);

$sorted = mergeSort($a);

echo "\nSorted:\n";
echo displayArray($sorted);

echo "\n";

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

function mergeSort($arr) 
{

    $size   = ceil(count($arr) / 2);
    $split  = array_chunk($arr, $size);

    if (count($split[0]) > 1) {
        $a = mergeSort($split[0]);
    } 
    else {
        $a = $split[0];
    }

    if (count($split[1]) > 1) {
        $b = mergeSort($split[1]);
    } 
    else {
        $b = $split[1];
    }
    
    $i = 0;
    $k = 0;
    $iLimit = count($a);
    $kLimit = count($b);
    
    $sorted = array();

    while ($i < $iLimit || $k < $kLimit) {

        if ($i >= $iLimit) {
            for ($g = $k; $g < $kLimit; $g++) {
                $sorted[] = $b[$g];
            }
            break;
        } elseif ($k >= $kLimit) {
            for ($g = $i; $g < $iLimit; $g++) {
                $sorted[] = $a[$g];
            }
            break;
        }

        if ( $a[$i] < $b[$k] ) {
            if ($i < $iLimit) {
                $sorted[] = $a[$i];
                $i ++;
            }
        } else {
            if ($k < $kLimit) {
                $sorted[] = $b[$k];
                $k ++;
            }
        }
    }

    return $sorted;
}