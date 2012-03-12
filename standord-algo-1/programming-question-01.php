<?php

require_once 'mergesort.php';

$filename = "IntegerArray.txt";
$contents = file($filename);

list($sorted, $inv) = mergeSort($contents);

var_dump($inv);