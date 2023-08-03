<?php

use People as GlobalPeople;

class People {

    public static $name;
    public static $age;
    public static $city;


    public function setName($name){
        return  self::$name = $name;
    }

    public function getName()
    {
        return self::$name;
    }
}

$people_name = new People();
$people_name->setName("Jose Amandio de Almeida");

echo strtoupper($people_name->getName());