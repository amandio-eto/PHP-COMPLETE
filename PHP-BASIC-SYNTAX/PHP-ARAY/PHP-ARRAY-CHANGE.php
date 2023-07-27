<?php


//This Is Array Change For using change  array lowercased or uppercased for Index.


$array_numeric = [ "drink"=>'coca-cola','fOOD'=>'Rice',"fRUIT"=>'mango'];

$rray_change_lower = array_change_key_case($array_numeric,CASE_LOWER);
$rray_change_upper = array_change_key_case($array_numeric,CASE_UPPER);
print_r($rray_change_lower).PHP_EOL;
print_r($rray_change_upper);


