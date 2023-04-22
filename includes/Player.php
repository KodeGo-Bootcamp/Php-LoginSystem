<?php 

class PlayerName{
    
    // PROPERTIES
    protected $first = "Rodrigo";
    protected $last = "Lopez";
    private $age = "28";

    // METHOD 
   
    public function petOwner(){
        $a = $this->first . "!";
        return $a;
    }
}

class Pet extends PlayerName{

    // METHODS
    // public function owner(){
    //     $a = "Hi there! I am the Pet owner";
    //     return $a;
    // }

    public function owner(){
       $a = "Hi there! I am the Pet owner my name is " . $this->first ." " . $this->last . "!";
       
       return $a;
       
    }
}