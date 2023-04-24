<?php
// Scope resolution ::
namespace ScopeExercise;


class ScopeExample2 extends ScopeExample1{
    public static $staticProperty = "This is a static property";


    public static function anotherTest(){
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}