<?php

/**
 * 
 * This use Simbol using for Operator Comparation
 * 1) ==  equal
 * 2) != not equal
 * 3) ===  identical
 * 4) !== Not identical
 * 5) > Less than
 * 6)  < Greater than
 * 7)  <= Less than or equal to
 * 8)  >= Greater than or equal to
 */


$a = 10;
$b = 9;

//Exaple 1
if($a==10){
    echo "Example 1 Correct".PHP_EOL;
}else{
    echo "incorement".PHP_EOL;
}
///////////////////////////////////////////////

# Example 2
if($b != 10){
    echo "Example 2 Correct".PHP_EOL;

}else
{
    echo "Incorrect".PHP_EOL;
}


///////////////////////////////////
#Example 3

/**
 * Please pay attention to this, we can use it wrong
 * example $a = "10";
 * If you use ==, the results are the same. 
 * But if you use identical, === to check the similarity of the data type
 */

 $c = "10";
 $d = 10;
 
 # This is Ouput Incorrect Because Type data is no Same, Varibale $c is String
 #Varibale $d is Integer;
 if($c===10){
    echo "Correct".PHP_EOL;
 }else
 {
    echo "Example 3 Incorect Varibale Type Data is String \"9\"".PHP_EOL;

 }

 if($d===10){
    echo "Example 3 Correct ".PHP_EOL;
 }else
 {
    echo "Incorrect".PHP_EOL;

 }


 #example 4 Not Identical 

//Now to can See the Result of Varibale $c and $d is Not Equal 

echo "True or 1 is Correct ".$c !==$d;
echo PHP_EOL;

#example 5 

if($b<$a){
    echo "Example 5 Correct Because $b Less Than $a";
}else{
    echo "Incorrect";
}

/**
 
For other examples I can't 
continue so you can explore 
yourself so you can be familiar 
with Coding PHP.Thanks

 */








