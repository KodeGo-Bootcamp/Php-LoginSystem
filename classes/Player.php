<?php 

class PlayerName{
    
    // PROPERTIES
    protected $first = "Rodrigo";
    protected $last = "Lopez";
    protected $age = "40";
    //private $favoriteGame = "WitcherIII";
    protected $favoriteGame = "WitcherIII";

    // METHOD 
   
    public function petOwner(){
        $a = $this->first . "!";
        return $a;
    }

    public function favoriteGame(){
        $game = "My favorite game is " . $this->favoriteGame . "!";
        return $game;
    }
}

class Pet extends PlayerName{

    // METHODS
    // public function owner(){
    //     $a = "Hi there! I am the Pet owner";
    //     return $a;
    // }
    // private $favoriteGame = "Dark Souls";
    protected $favoriteGame = "Dark Souls";

    public function owner(){
       $a = "Hi there! I am the Pet owner my name is " . $this->first ." " . $this->last . "my age is " . $this->age . "my favorite game is " . $this->favoriteGame ."!";
       
       return $a;
       
    }
}