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

        }
    }

    

}



