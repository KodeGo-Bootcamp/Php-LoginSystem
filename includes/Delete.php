<?php 

class DeleteObject{
    //properties and methods
    public $data = "This is information stored that we want to set as a property";

    public function __construct() {
        echo "We want this information to automatically called when the class is instantiated.!!! <br>";
    }

    public function setNewProperty($newData){
        $this->data = $newData;
    }

    public function getProperty(){
        return $this->data;
    }

    public function __destruct(){
        echo "<br> This is the end of our deleteObject class!";
    }
}