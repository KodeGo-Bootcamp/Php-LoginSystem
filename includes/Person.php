<?php 

class Person2{
    //properties
    public $name;
    public $eyeColor;
    public $age = "undefined"; // This is not practical 

    //methods
    // public function setName($name){
    //     $this->name = $name;
    // }

    // function __construct(){} // run or automatically called when we create an object
    // function __destruct(){}


    public function  __construct($newName,$newEyeColor,$newAge)
    {
        $this->name = $newName;
        $this->eyeColor = $newEyeColor;
        $this->age = $newAge;
    }

    public function __destruct(){
        echo "My Name is {$this->name}.";
        echo "My EyeColor is {$this->eyeColor}.";
        echo "My Age is {$this->age}.";
    }

    // public function getname(){
    //     echo "<br>";
    //     return $this->name;
        
    // }

    // public function getEyeColor(){
    //     echo "<br>";
    //     return $this->eyeColor;
        
    // }

    // public function getAge(){
    //     echo "<br>";
    //     return $this->age;
        
    // }
}