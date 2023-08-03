<?php

use Login as GlobalLogin;
use People as GlobalPeople;

/**
 * 
 * If use use Atribute Public this Atributes access for Public;
 * But You Use the "protected" you only access it in inside Class
 * And Also in Extends Class;
 * 
 * Another one is use private use only in inside own Class;
 * 
 * 
 * 
 *
 */

class People 
{ 
    # This use for access by Public ;
    public $name;
    public $age;

}



class Users{

    protected $name;
    protected $password;
    protected $email;

}

Class Login extends Users {


    public function setEmail($email){
        return $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

}

class userlogin{

    private $email;
    private $password;

    public function setEmail($email){
        return $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    

    
    public function setPassword($password){
        return $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }


    public function statusLogin(){
        if($this->email == "JoseAmandiodeAlmeida021099@gmail.com" and $this->password=="1234"){
            $status = "Success";
        }else{
            $status = "Failed";
        }

        return $status;
    }



}


# Acessibility Public
$public_people = new People();
$public_people->name = "Jose Amandio de Almeida";
$public_people->age = 23;

echo $public_people->name.PHP_EOL;
echo $public_people->age.PHP_EOL;

# Accessibility Protected;

$protected_login = new Login();
$protected_login->setEmail("JoseAmandiodeAlmeida021099@gmail.com");
echo $protected_login->getEmail().PHP_EOL;


# Acessibility Private 
$private_userlogin = new userlogin();
$private_userlogin->setEmail("JoseAmandiodeAlmeida021099@gmail.com");
$private_userlogin->setPassword("1234");
echo $private_userlogin->statusLogin().PHP_EOL;





