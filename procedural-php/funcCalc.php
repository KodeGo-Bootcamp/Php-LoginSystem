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

$num1 = $_GET["num1"];
$operations = $_GET["operations"];
$num2 = $_GET["num2"];

echo "Calculated Value: " . calculateFunc($num1, $operations, $num2);