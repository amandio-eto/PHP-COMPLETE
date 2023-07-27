<?php




$firtsName = "Jose Amandio";
$lastName = "de Almeida";

# Anomymous Functions;

$anomynousFunction = function() use($firtsName, $lastName){

        return "My Name is $firtsName $lastName".PHP_EOL;
};


# Using Arrow Function
$arrowFunction = fn()=> "My Name is $firtsName $lastName";

echo $anomynousFunction();
echo $arrowFunction();