<?php 



class House{
    // properties
    private $town;
    private $address; 

    public function __construct($newTown, $address){
        $this->town = $newTown;
        $this->address = $address;
    }


    public function getAddress(){
        echo "<br>";
        return "Rod lives in " . $this->town . " " . $this->address;
    }
}