<?php 
class Car{
    //PROPERTIES
    public $model;
    

    //METHODS
    // set up a function declaration to set model
    function setModel($model){
        $this->model=$model;
    }

    
    //Refactor this into a constructor

    // set up a funciton declration to get model
    function getModel(){
        return $this->model;
    }
}
  
//CREATE An INSTANCE OF THE OBJECT
$bmw = new Car();
$bmw->setName('bmw'); // dot syntax


// CONNECT TO index.php