<?php

//This Basic Logic For Condition && simbol AND,  simbol OR is ||
//Only For If and Else 

$username = "amandio";
$password = "1234";


if($username=='amandio' && $password=="1234"){
    echo "Your Password is Correct".PHP_EOL;
}else{
    echo "Your Password is Incorect";
}


//If elseif else;
$finalexam = 80;

if($finalexam<=60)
{
    echo "Exam is Failed";

}elseif($finalexam>=80)
{ echo "Pass Exam";

}else
{

    echo "Please Try Again for Exam in Next Year";


}