<?php
 namespace Owner;

class Owner {
    public $name;
    public $eyeColor;
    public $age;

    public static $drinkingAge = 18;
    
    public function  __construct($newName,$newEyeColor,$newAge)
    {
        $this->name = $newName;
        $this->eyeColor = $newEyeColor;
        $this->age = $newAge;
    }

    public function setOwnerName($newName){
        $this->name=$newName;
    }

    public function getOwnerName(){
        return "The owner " . " " . $this->name . " and his age is " . $this->age . " years old!.";
    }


}
