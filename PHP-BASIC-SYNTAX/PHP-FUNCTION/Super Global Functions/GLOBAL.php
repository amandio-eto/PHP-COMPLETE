<?php

$name = "Jose Amanido de Almeida";
$age = 23;


function personal()
{
    echo $GLOBALS['name'].PHP_EOL;
    echo $GLOBALS['age'].PHP_EOL;

}


personal();