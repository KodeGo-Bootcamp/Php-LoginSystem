<?php

// create a class FRUIT
class Fruit
{
    // create a public property name
    public $name = "apple";
    // create a  private property color
    private $color = "red";
    // create a protected property weight
    protected $weight = "1kg";

    // function __construct($name)
    // {
    //     $this->name = $name;
    // }
}





// create a class Person
class Person extends Fruit
{
    // create a property for protected person name
    protected $person = "Jerome";

    // create a method eatFruit
    public function eatFruit()
    {
        $a = "Hi I am" . $this->person . "and my favorite fruit is" . $this->name . ".";
        return $a;
    }

    // declare and return a declared and initialzed variable $eat with the strings "Hi I am" <personanme> and my favorite fruit is <fruitname>.
}
