<?php 

namespace Person5;

class Person5{
    //properties
    public $name;
    public $eyeColor;
    public $age; // This is not practical 

    //methods
    // class/interface, callable, self, array, bool, int, float, string, iterable, objects

    public function  setName(string $newName)
    {
       return $this->name = $newName;
     
    }

    public function getName(){
        return $this->name . " is " . " 40 years old";
    }
    
}