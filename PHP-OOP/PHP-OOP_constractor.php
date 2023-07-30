<?php

class People{

    public $name;
    public $age;
    public $city;
    public $country;


    public function __construct($name,$age, $city,$country)
    {
        $this->name=$name;
        $this->age= $age;
        $this->city= $city;
        $this->country = $country;
        
    }
}


$people_name = new People("Jose Amandio de Almeida",23,"Dili","Timor-Leste");
echo $people_name->name.PHP_EOL;
echo $people_name->age.PHP_EOL;
echo $people_name->city.PHP_EOL;
echo $people_name->country.PHP_EOL;



