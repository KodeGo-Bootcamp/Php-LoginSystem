<?php 

    // create a class
class SignUpController{
    // PROPERTIES
    // create properties related to data we want to grab

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    //METHODS
    // create a function construct
    public function __construct($uid, $pwd, $pwdrepeat,$email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function emptyInput(){
        $results;
        if(empty($this->$uid || $this->$pwd ||$this->$pwdrepeat || $this->$email)){
            $results = false;
        }
        else{
            $results = true;
        }
         return $results;
    }

    private function invalidUid(){
        $results;
        if(!pregmatch("/^[a-zA-Z0-0]*$/", $this->uid)){
            $results = false;
        }else{
         $results = true;   
        }
        return $results;
    }

    private function invalidEmail(){
        $results;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $results = false;
        }else{
         $results = true;   
        }
        return $results;
    }

    private function pwdMatch(){
        
        if($this->pwd !== $this->pwdrepeat){
            $results = false;
        }else{
         $results = true;   
        }
        return $results;
    }
}