<?php


$personal = 
[
    "name" => "Jose Amandio de Almeida"

];


if(isset($personal['name'])){
    $person_name = "My Name Is :".$personal['name'];
}else{
    $person_name = "Personal Name Notting";
}

echo $person_name.PHP_EOL;
# Simple Using ternary Operator;
 $personal_name = $personal['name'] ?? "Personal Name Notting";
 echo $person_name;



