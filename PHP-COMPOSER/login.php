<?php

require_once __DIR__ .'/vendor/autoload.php';
use Amandio\LearningPhpcomposer\Logic\Login;



$loginuser = Login::userLogin('amandio','123456');

if($loginuser){
    echo "login Success";
}else{
    echo "Login Failed";
}


