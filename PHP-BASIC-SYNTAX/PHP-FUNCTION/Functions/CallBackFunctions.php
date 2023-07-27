<?php



$name = "Jose Amandio de Almeida";


function personal($name, callable $filter){
    $fullname = call_user_func($filter,$name);
    return "My Name is $fullname";
}

#exaple 1
echo personal($name, "strtoupper").PHP_EOL;
# Example 2
echo personal($name, function($name){
         return strtoupper($name);
}).PHP_EOL;
#example 3
echo personal($name, fn($name)=>strtoupper($name));
