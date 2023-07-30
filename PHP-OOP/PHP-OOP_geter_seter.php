<?php

class Login {

    private $email;
    private $password;


    public function getEmail()
    {

        return $this->email;

    }
    public function setEmail($setemail)
    {
        return $this->email=$setemail;
    }


    public function getPassword()
    {

        return $this->email;

    }
    public function setPassword($setpassword)
    {
        return $this->email=$setpassword;
    }


    

    

}


$user_login = new Login();

$email = $user_login->setEmail('JoseAmandiodeAlmeida021099@gmail.com');
$password = $user_login->setPassword('123456');

echo $email.PHP_EOL;
echo $password;

