<?php

class PI{
    static $pi = 3.14;

    static function staticMethod(){
        $description = "In mathematics we have the value of PI as";
        return $description . " " . self::$pi;
    }
}
