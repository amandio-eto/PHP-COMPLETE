<?php

$a = 10;
$b = 5;

$aa = $a + $b;
echo "Result is $aa".PHP_EOL;
/**
 * you can do like This
 * 
 * $a = 10 
 * $b = 5 
 * $a+=$b;
 * is same $a = $a+b;
 */
echo "Result is ".$a+=$b;
echo PHP_EOL;
echo "Result is ".$a-=$b;
echo PHP_EOL;
echo "Result is ".$a*=$b;
echo PHP_EOL;
echo "Result is ".$a%=$b;

