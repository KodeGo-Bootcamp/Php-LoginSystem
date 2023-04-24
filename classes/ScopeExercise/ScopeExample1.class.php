<?php
// Scope resolution ::
namespace ScopeExercise;

class ScopeExample1{
  //properties
  const EXAMPLE = "We cannot change this!";

  // Methods

  public static function test(){
      // $testing = "This is a test!";
      // echo $testing;
      
    echo self::EXAMPLE;
  }

}

