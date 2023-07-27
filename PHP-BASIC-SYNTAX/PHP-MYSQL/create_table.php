
<?php 

#Config Server For PHP;

$server = "localhost";
$username = "root";
$password = "passwordU$1";
$db = "DB_PHP_BASIC";



$contomysql= new mysqli($server,$username,$password,$db);

# How to create Table in PHP to Mysql;


$sql= "CREATE TABLE users
        (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL
        
        )";

if($contomysql->query($sql)===TRUE){
    echo "success Create Table";
}else{
    echo "Failed to Create Table";

}







