<?php
namespace Amandio\LearningPhpcomposer\Logic;

class Login {



    public static function userLogin( string $username, string $password ):bool
    {
    
        if($username == 'amandio' && $password=='123456'){

            return true;
        }else{

            return false;
        }

    }



}









