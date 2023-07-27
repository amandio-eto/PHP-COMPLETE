<?php

# You Only Using require_once For Accesss The Connection_mysqli.php 

require_once('connection_mysqli.php');
$sql = "CREATE DATABASE DB_PHP_BASIC";


if($con_phptomysql->query($sql)===TRUE){
    echo "Success Create Database";
}else{
    echo "Error Create Database";
}




 
