<?php



class People 
{

    public $name;
    public $age;
    public $city;
    public $country;

}


Class Students extends People 
{
    public $studentid;


}

$student= new Students();
$student->name="Jose Amandio de Almeida";
$student->studentid= "02101999";
$student->age = 23;
$student->city = "Dili";
$student->country = "Timor-Leste";



echo $student->name.PHP_EOL;
echo $student->age.PHP_EOL;
echo $student->studentid.PHP_EOL;
echo $student->city.PHP_EOL;
echo $student->country.PHP_EOL;
