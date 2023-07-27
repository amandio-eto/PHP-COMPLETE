<?php


$name = "Jose Amandio de Almeida";


function name(){
    echo "You Can't Access varibale if don't use Global".PHP_EOL;
}

function name_global()
{

  global $name;
   return $name;
   
}




name();
echo name_global();