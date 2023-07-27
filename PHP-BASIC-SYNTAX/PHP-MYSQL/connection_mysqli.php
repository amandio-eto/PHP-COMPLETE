<?php

/**
 * If You Using Xammp 
 * $server = "localhost"
 * $username = "root"
 * $password = '';
 * 
 * 
 */

$server = "localhost";
$username = "root";
$password = "passwordU$1";


$con_phptomysql= new mysqli($server,$username,$password);


#Check Connection 
if($con_phptomysql==true){
    echo "connection Success";
}else{
    echo "Failed";
}