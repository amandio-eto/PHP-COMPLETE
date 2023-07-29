<?php

# How to Use Operator Logic in PHP 
/**
 * Operator Logic Always using 
 * & - AND
 * || - OR
 * xor 
 * ! not 
 */

 
 #example 1 AND &&
$username = "amandio";
$password = '12345';
$status = 'guest';


if($username=="amandio" && $password=='12345'){
    echo "Example 1 Correct of AND".PHP_EOL;
}else{
    echo "Failed";
}


# example 2 OR ||
if($username==null || $username=='amandio'){
    echo "Example 2 Correct Of OR".PHP_EOL;
}else
{
    echo "Example 2 incorrect";
}


#example 3 ! not

/**
 * will Exaplain you using Simple ideia
 * if status not equal admin and username equal admin 
 * ouput Exampe You Are Guest
 * else "You are Admi"
 */

if(!($status=='admin') && $username=='amandio')
{ 
    echo "Exampe 3 You Are Guest".PHP_EOL;

}else{
    echo "Exampe 3 You are Admin";
}


/**
 * 
 * How to use xor is using only one is Correct 
 * if usernmae == 'amandio' and password =='test';
 * is already Correct;
 */

 if($status=='admin' xor $username=='test')
{ 
    echo "Exampe 4 Correct XOR";

}else
{
    echo "Exampe 4 Incorrect XO";
}
