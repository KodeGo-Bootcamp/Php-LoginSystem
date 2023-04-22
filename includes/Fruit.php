<?php

// create a class FRUIT
class Fruit2
{
    // create a public property name
    public $name = "apple";
    // create a  private property color
    private $color = "red";
    // create a protected property weight
    protected $weight = "1kg";

    // function __construct($name)
    // {
    //      $this->name = $name;
    // }
}





// create a class Person
class Person extends Fruit2
{
    // create a property for protected person name
    protected $person = "Jerome";
    protected $person2 = "Rod";

    // create a method eatFruit
    public function eatFruit()
    {
        $a = "Hi I am" . $this->person2 . "and my favorite fruit is" . $this->name . ".";
        return $a;
    }

    // declare and return a declared and initialzed variable $eat with the strings "Hi I am" <personanme> and my favorite fruit is <fruitname>.
}
