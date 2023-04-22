<?php 

class Person3{
    //properties
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

    public function setName($newName){
        $this->name=$newName;
    }

    public function getName(){
        return $this->name;
    }

    public function getDrinkingAge(){
        return self::$drikingAge;
    }

    public static function setDrinkingAge($newDrinkingAge){
        self::$drinkingAge = $newDrinkingAge;
    }

}