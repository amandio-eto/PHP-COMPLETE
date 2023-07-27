<?php


$fruits = ['apple','mango','orange'];
$food = ['rice','burger','pizza'];
$drink = ['beer','cola','mineral water'];
$arrayDiffAssoc = array_diff_assoc($fruits,$food,$drink);

print_r($arrayDiffAssoc);

