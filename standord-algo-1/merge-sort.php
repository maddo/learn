<?php

function mergeSort($arr)
{
    if (count($arr) < 2)
        return array($arr, 0);

    $size   = ceil(count($arr) / 2);
    list($left, $right)  = array_chunk($arr, $size);

    list($left, $l_inv)  = mergeSort($left);
    list($right, $r_inv) = mergeSort($right);
    $inv = $l_inv + $r_inv;

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
        } elseif ( (int) $left[$i] < (int) $right[$k] ) {
            $sorted[] = $left[$i];
            $i ++;
        } else {
            $inv += $iLimit - $i;
            $sorted[] = $right[$k];
            $k ++;
        }
    }

    return array($sorted, $inv);
}