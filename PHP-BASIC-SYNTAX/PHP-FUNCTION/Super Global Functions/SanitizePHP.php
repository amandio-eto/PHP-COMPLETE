<?php



function input_filter($input)
{

    return filter_input(INPUT_POST,$input,FILTER_SANITIZE_SPECIAL_CHARS);

}

$name = input_filter($_POST['name']);
$age = input_filter($_POST['age']);
$city = input_filter($_POST['city']);
$country =input_filter($_POST['country']);



if(isset($_POST['submit'])){

    $input_name=$name;
    echo "$input_name";
    echo "</br>";
    echo "$age";
    echo "</br>";
    echo "$city";
    echo "<br>";
    echo $country;

}