<?php 

function calculateFunc($num1, $operations, $num2){
    $result;
    switch($operations){
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        default:
        $result = "Output Error";
        break;
        
    }

    return $result;
}