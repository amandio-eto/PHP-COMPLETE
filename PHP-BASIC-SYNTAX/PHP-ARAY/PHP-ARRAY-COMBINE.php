<?php

/**
 * array_combine function to combine two different arrays.
 * example Below 
 * output
 * [fruits] => 24
    [food] => 13
    [drink] => 10

 * 
 */
$stok = ['fruits','food','drink'];
$qty = [24,13,10];

$arrayCombine = array_combine($stok,$qty);
print_r($arrayCombine);