<?php
include '../model/signup.model.php';
class SignupContr extends SignupModel{

    private $username;
    private $email;
    private $pwd;

    public function __construct($username, $email, $pwd)
    {
        $this->username = $username;
        $this->email = $email;
        $this->pwd = $pwd;
    }
    
    private function PwdMatch()
    {
        return $this->checkUser($this->username, $this->email);
    }

    private function SignupUser()
    {
        if ($this->PwdMatch()) {
            exit();
        }
        $this->setUser($this->username, $this->email, $this->pwd);
    }

}