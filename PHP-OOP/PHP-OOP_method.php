<?php


class Personal 
{
    public $name;
    public $age;



    public function identity()
    {
        echo "My Name is Amandio".PHP_EOL;

    }

    public function personalname()
    {
        return $this->name;

    }

}


# How to Intansiate in PHP-OOP;

$people = new Personal();
echo $people->identity();
# how to set atribute in php is very Easy;
$name = $people->name="Jose Amnadio de Almeida";
$age = $people->age = 23;

echo $name.PHP_EOL;
echo $age.PHP_EOL;
echo $people->personalname();


