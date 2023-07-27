<?php 


$personalinformation = 
[
    "name" => "Jose Amandio de Almeida",
    "age" => 23,
    "dataofbirthday"=> "02-10-1999",
    "village" => 'Bairo-Pite',
    "address" => "Rua Bairo-Pite Hudi Laran Timor-leste",
    "city" => "Dili",
    "country" => "Timor-Leste"

];

foreach($personalinformation as $key=>$values){
    echo $values.PHP_EOL;
}