<?php 
class Car{
    //PROPERTIES
    public $model;
    public $color;


    //METHODS
    // set up a function declaration to set model
    function setModel($model){
        $this->model=$model;
    }

    function setColor($Color){
        $this->color=$color;
    }

    
    //Refactor this into a constructor

    // set up a funciton declration to get model
    function getModel(){
        return $this->model;
    }

    function getColor(){
        return $this->color;
    }
}
  
//CREATE An INSTANCE OF THE OBJECT
$bmw = new Car();
$bmw->setModel('bmw'); // dot syntax

$red = new Car();
$bmw->setColor('red');


// CONNECT TO index.php
